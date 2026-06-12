<?php

return [

    'contact_email'  => env('SITE_CONTACT_EMAIL', 'hello@aqwealthuniversity.com'),
    'business_hours' => env('SITE_BUSINESS_HOURS', 'Mon–Fri, 9am–6pm'),

    'media' => [
        'founder_image_url'        => env('SITE_FOUNDER_IMAGE_URL'),
        'testimonial_video_1_url'  => env('SITE_TESTIMONIAL_VIDEO_1_URL'),
        'testimonial_video_2_url'  => env('SITE_TESTIMONIAL_VIDEO_2_URL'),
    ],

    'links' => [
        'skool'                       => env('SITE_SKOOL_URL', 'https://www.skool.com/credit-wisdom-academy-9711/about'),
        'booking'                     => env('SITE_BOOKING_URL'),
        'checkout_standard'           => env('SITE_CHECKOUT_STANDARD_URL'),
        'checkout_expedited'          => env('SITE_CHECKOUT_EXPEDITED_URL'),
        'checkout_premium'            => env('SITE_CHECKOUT_PREMIUM_URL'),
        'checkout_mentorship_credit'  => env('SITE_CHECKOUT_MENTORSHIP_CREDIT_URL'),
        'checkout_mentorship_business'=> env('SITE_CHECKOUT_MENTORSHIP_BUSINESS_URL'),
        'checkout_business_blueprint' => env('SITE_CHECKOUT_BUSINESS_BLUEPRINT_URL'),
        'credit_monitoring'           => env('SITE_CREDIT_MONITORING_URL'),
        'client_portal'               => env('SITE_CLIENT_PORTAL_URL'),
    ],

    'support' => [
        'phone' => env('SITE_SUPPORT_PHONE', '(843) 609-7462'),
    ],

    'agreement' => [
        'version' => env('SITE_AGREEMENT_VERSION', 'v1.0'),
    ],

];
