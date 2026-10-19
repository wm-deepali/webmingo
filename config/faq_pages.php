<?php

/*
|--------------------------------------------------------------------------
| Static pages that can have their own FAQs
|--------------------------------------------------------------------------
| Every key is the Laravel ROUTE NAME of that page, so the frontend can do:
|   Faq::active()->forService(Route::currentRouteName())->get();
|   Faq::active()->forIndustry(Route::currentRouteName())->get();
|
| To add a new service / sub service / industry later, add it here.
*/

return [

    'services' => [

        'website-design-development' => [
            'name' => 'Website Design & Development',
            'subs' => [
                'business-website-development'         => 'Business Website Development',
                'E-Commerce-website-development'       => 'E-Commerce Website Development',
                'E-Learning-LMS-development'           => 'E-Learning & LMS Development',
                'classified-portals-development'       => 'Classified Portals Development',
                'custom-web-applications-development'  => 'Custom Web Applications Development',
            ],
        ],

        'digital-marketing' => [
            'name' => 'Digital Marketing',
            'subs' => [
                'search-engine-optimisation' => 'Search Engine Optimisation (SEO)',
                'social-media-marketing'     => 'Social Media Marketing (SMM)',
                'google-ads-management'      => 'Google Ads Management (PPC)',
                'meta-ads-management'        => 'Meta Ads Management',
            ],
        ],

        'mobile-app-development' => [
            'name' => 'Mobile App Development',
            'subs' => [
                'android-applications-development' => 'Android Applications Development',
                'iOS-applications-development'     => 'iOS Applications Development',
                'flutter-app-development'          => 'Flutter App Development',
            ],
        ],

        'digital-branding' => [
            'name' => 'Digital Branding',
            'subs' => [
                'graphic-designing' => 'Graphic Designing',
                'video-creations'   => 'Video Creations',
            ],
        ],

    ],

    'industries' => [
        'education-coaching'      => 'Education & Coaching',
        'retail-E-Commerce-D2C'   => 'Retail, E-Commerce & D2C',
        'real-state'              => 'Real Estate',
        'healthcare-clinics'      => 'Healthcare & Clinics',
        'NGO-Non-Profits'         => 'NGO & Non-Profits',
        'manufacturing-export'    => 'Manufacturing & Export',
        'hotels-hospitality'      => 'Hotels & Hospitality',
        'travel-tourism'          => 'Travel & Tourism',
    ],

];