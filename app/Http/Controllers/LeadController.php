<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\Rule;

class LeadController extends Controller
{
    public function creditInline(Request $request): JsonResponse
    {
        $data = $request->validate([
            'fullName' => ['required', 'string', 'max:120'],
            'email'    => ['required', 'email', 'max:160'],
            'phone'    => ['required', 'string', 'max:40'],
        ]);

        $data['formType'] = 'Credit Repair Inline Form';

        return $this->forward($request, 'credit_inline', $data);
    }

    public function creditPopup(Request $request): JsonResponse
    {
        $data = $request->validate([
            'fullName'        => ['required', 'string', 'max:120'],
            'email'           => ['required', 'email', 'max:160'],
            'phone'           => ['required', 'string', 'max:40'],
            'creditChallenge' => ['nullable', 'string', 'max:120'],
            'creditScore'     => ['nullable', 'string', 'max:60'],
            'negativeItems'   => ['nullable', 'string', 'max:60'],
            'mainGoal'        => ['nullable', 'string', 'max:120'],
        ]);

        $data['formType'] = 'Credit Repair Popup Quiz';

        return $this->forward($request, 'credit_popup', $data);
    }

    public function intake(Request $request): JsonResponse
    {
        $data = $request->validate([
            'fullName'   => ['required', 'string', 'max:120'],
            'email'      => ['required', 'email', 'max:160'],
            'phone'      => ['required', 'string', 'max:40'],
            'address'    => ['required', 'string', 'max:240'],
            'city'       => ['required', 'string', 'max:80'],
            'state'      => ['required', 'string', 'max:2'],
            'zip'        => ['required', 'string', 'max:10'],
            'dob'        => ['required', 'string', 'max:12'],
            'ssnLast4'   => ['required', 'string', 'size:4'],
            'package'    => ['nullable', 'string', 'max:80'],
            'bestTime'   => ['nullable', 'string', 'max:60'],
            'goal'       => ['nullable', 'string', 'max:1000'],
            'consent'    => ['accepted'],
        ]);

        $data['formType'] = 'Client Intake Form';

        return $this->forward($request, 'intake', $data);
    }

    public function onboardingSigned(Request $request): JsonResponse
    {
        $data = $request->validate([
            'fullName'      => ['required', 'string', 'max:120'],
            'email'         => ['required', 'email', 'max:160'],
            'phone'         => ['nullable', 'string', 'max:40'],
            'package'       => ['nullable', 'string', 'max:80'],
            'typedSignature'=> ['required', 'string', 'max:120'],
            'drawnSignature'=> ['required', 'string', 'starts_with:data:image/png;base64,', 'max:400000'],
            'agreedAt'      => ['required', 'string', 'max:40'],
            'agreementVersion' => ['nullable', 'string', 'max:40'],
        ]);

        $data['formType'] = 'Client Agreement Signed';

        return $this->forward($request, 'onboarding_signed', $data);
    }

    public function funding(Request $request): JsonResponse
    {
        $data = $request->validate([
            'bizName'      => ['required', 'string', 'max:160'],
            'entity'       => ['required', 'string', 'max:60'],
            'industry'     => ['required', 'string', 'max:80'],
            'tib'          => ['required', 'string', 'max:40'],
            'state'        => ['required', 'string', 'max:2'],
            'creditRange'  => ['required', 'string', 'max:40'],
            'revenue'      => ['required', 'string', 'max:40'],
            'amount'       => ['required', 'string', 'max:40'],
            'fundingType'  => ['required'],
            'useOfFunds'   => ['nullable', 'string', 'max:1000'],
            'firstName'    => ['required', 'string', 'max:80'],
            'lastName'     => ['required', 'string', 'max:80'],
            'email'        => ['required', 'email', 'max:160'],
            'phone'        => ['required', 'string', 'max:40'],
            'bestTime'     => ['nullable', 'string', 'max:60'],
            'consent'      => ['accepted'],
        ]);

        $data['fullName'] = trim(($data['firstName'] ?? '') . ' ' . ($data['lastName'] ?? ''));
        $data['formType'] = 'Business Funding Application';

        if (is_array($data['fundingType'] ?? null)) {
            $data['fundingType'] = implode(', ', $data['fundingType']);
        }

        return $this->forward($request, 'funding', $data);
    }

    private function forward(Request $request, string $key, array $payload): JsonResponse
    {
        $throttleKey = 'leads:' . $request->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 8)) {
            return response()->json(
                ['ok' => false, 'message' => 'Too many submissions. Please wait a moment and try again.'],
                429
            );
        }
        RateLimiter::hit($throttleKey, 60);

        $url = config("services.ghl.webhooks.{$key}");

        if (! $url) {
            Log::error('GHL webhook URL missing', ['key' => $key]);
            return response()->json(
                ['ok' => false, 'message' => 'Submission endpoint is not configured. Please contact support.'],
                500
            );
        }

        $payload['source']      = $request->headers->get('referer') ?: url('/');
        $payload['submittedAt'] = now()->toIso8601String();
        $payload['ip']          = $request->ip();
        $payload['userAgent']   = (string) $request->userAgent();

        try {
            $response = Http::timeout((int) config('services.ghl.timeout', 10))
                ->acceptJson()
                ->asJson()
                ->post($url, $payload);

            if ($response->successful()) {
                return response()->json(['ok' => true]);
            }

            Log::warning('GHL webhook non-2xx', [
                'key'    => $key,
                'status' => $response->status(),
                'body'   => $response->body(),
            ]);
        } catch (\Throwable $e) {
            Log::error('GHL webhook error', [
                'key'     => $key,
                'message' => $e->getMessage(),
            ]);
        }

        return response()->json(
            ['ok' => false, 'message' => 'We could not submit your application. Please try again or contact us directly.'],
            502
        );
    }
}
