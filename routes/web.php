<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\NavigationController;
use App\Http\Controllers\Admin\PageManagerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VisualEditorController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public pages
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/funding',       [PageController::class, 'funding'])->name('funding');
Route::get('/services',      [PageController::class, 'services'])->name('services');
Route::get('/pricing',       [PageController::class, 'pricing'])->name('pricing');
Route::get('/mentorship',    [PageController::class, 'mentorship'])->name('mentorship');
Route::get('/business-setup',[PageController::class, 'businessSetup'])->name('business-setup');
Route::get('/faq',           [PageController::class, 'faq'])->name('faq');
Route::get('/community',     [PageController::class, 'community'])->name('community');
Route::get('/intake',        [PageController::class, 'intake'])->name('intake');
Route::get('/onboarding',    [PageController::class, 'onboarding'])->name('onboarding');

/*
|--------------------------------------------------------------------------
| Lead submission endpoints
|--------------------------------------------------------------------------
*/
Route::post('/leads/credit-inline',     [LeadController::class, 'creditInline'])->name('leads.credit-inline');
Route::post('/leads/credit-popup',      [LeadController::class, 'creditPopup'])->name('leads.credit-popup');
Route::post('/leads/funding',           [LeadController::class, 'funding'])->name('leads.funding');
Route::post('/leads/intake',            [LeadController::class, 'intake'])->name('leads.intake');
Route::post('/leads/onboarding-signed', [LeadController::class, 'onboardingSigned'])->name('leads.onboarding-signed');

/*
|--------------------------------------------------------------------------
| Admin panel (owner CMS)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    Route::get('login',  [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.attempt');
    Route::post('logout',[AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

        // ── Content settings (existing) ──────────────────────────────────
        Route::get('content/{group}',  [SettingController::class, 'edit'])->name('admin.settings.edit');
        Route::post('content/{group}', [SettingController::class, 'update'])->name('admin.settings.update');

        // ── Media library ────────────────────────────────────────────────
        Route::get('media',              [MediaController::class, 'index'])->name('admin.media.index');
        Route::post('media',             [MediaController::class, 'store'])->name('admin.media.store');
        Route::delete('media/{medium}',  [MediaController::class, 'destroy'])->name('admin.media.destroy');

        // ── Navigation manager ───────────────────────────────────────────
        Route::get('navigation',                    [NavigationController::class, 'index'])->name('admin.navigation.index');
        Route::post('navigation',                   [NavigationController::class, 'store'])->name('admin.navigation.store');
        Route::post('navigation/reorder',           [NavigationController::class, 'reorder'])->name('admin.navigation.reorder');
        Route::put('navigation/{navItem}',          [NavigationController::class, 'update'])->name('admin.navigation.update');
        Route::delete('navigation/{navItem}',       [NavigationController::class, 'destroy'])->name('admin.navigation.destroy');
        Route::patch('navigation/{navItem}/toggle', [NavigationController::class, 'toggle'])->name('admin.navigation.toggle');

        // ── Page manager ─────────────────────────────────────────────────
        Route::get('pages',               [PageManagerController::class, 'index'])->name('admin.pages.index');
        Route::get('pages/create',        [PageManagerController::class, 'create'])->name('admin.pages.create');
        Route::post('pages',              [PageManagerController::class, 'store'])->name('admin.pages.store');
        Route::get('pages/{page}/edit',   [PageManagerController::class, 'edit'])->name('admin.pages.edit');
        Route::put('pages/{page}',        [PageManagerController::class, 'update'])->name('admin.pages.update');
        Route::delete('pages/{page}',     [PageManagerController::class, 'destroy'])->name('admin.pages.destroy');
        Route::patch('pages/{page}/publish',   [PageManagerController::class, 'publish'])->name('admin.pages.publish');
        Route::patch('pages/{page}/unpublish', [PageManagerController::class, 'unpublish'])->name('admin.pages.unpublish');

        // ── Visual editor ─────────────────────────────────────────────────
        Route::get('visual-editor',          [VisualEditorController::class, 'index'])->name('admin.visual-editor');
        Route::post('visual-editor/reorder', [VisualEditorController::class, 'reorder'])->name('admin.visual-editor.reorder');
        Route::post('visual-editor/toggle',  [VisualEditorController::class, 'toggleVisible'])->name('admin.visual-editor.toggle');
    });
});

/*
|--------------------------------------------------------------------------
| Custom pages (dynamic — must come LAST to avoid conflicts)
|--------------------------------------------------------------------------
*/
Route::get('/{slug}', [PageController::class, 'show'])
    ->where('slug', '^(?!admin|funding|services|pricing|mentorship|business-setup|faq|community|intake|onboarding|_debugbar)[a-z0-9\-]+$')
    ->name('pages.show');
