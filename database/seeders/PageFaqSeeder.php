<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class PageFaqSeeder extends Seeder
{
    public function run(): void
    {
        $sets = [

            // Website Design & Development (main service page)
            [
                'where' => [
                    'type'        => Faq::TYPE_SERVICE,
                    'service'     => 'website-design-development',
                    'sub_service' => null,
                    'industry'    => null,
                ],
                'items' => [
                    [
                        'What type of website does my business need?',
                        'It depends on what the website needs to do. A business website works well for showcasing services and generating enquiries, while e-commerce is suited to selling products online. If you need custom workflows, logins or dashboards, a web application may be more suitable.',
                    ],
                    [
                        'Can you redesign my existing website instead of building a new one?',
                        'Yes. We can review your existing website, content, design and business goals, then recommend whether a complete redesign, targeted improvements or a fresh build is the right approach.',
                    ],
                    [
                        'Will my website work properly on mobile and tablet devices?',
                        'Yes. Websites are developed with responsive layouts so content, navigation, forms and key functionality adapt across mobile, tablet and desktop screen sizes.',
                    ],
                    [
                        'Can you integrate forms, CRM, payment gateways or other tools?',
                        'Yes. We can integrate enquiry forms, CRM systems, payment gateways, analytics, chat tools and other third-party services based on your business requirements and available integrations.',
                    ],
                    [
                        'Can the website be expanded as my business grows?',
                        'Yes. The website structure can be planned with future growth in mind, allowing you to add pages, features, products, integrations and other functionality as your requirements evolve.',
                    ],
                ],
            ],

            // Education & Coaching (industry page)
            [
                'where' => [
                    'type'        => Faq::TYPE_INDUSTRY,
                    'service'     => null,
                    'sub_service' => null,
                    'industry'    => 'education-coaching',
                ],
                'items' => [
                    [
                        'What type of education websites can Web Mingo build?',
                        'We build websites for coaching institutes, schools, colleges, training institutes, exam institutes and online educators.',
                    ],
                    [
                        'Can you build an LMS for our institute?',
                        'Yes. We build LMS platforms with courses, student accounts, study material, assessments and progress tracking.',
                    ],
                    [
                        'Can our website include admission enquiries?',
                        'Yes. Enquiry forms and admission workflows can help students connect with your team and make follow-ups easier.',
                    ],
                    [
                        'Can you integrate WhatsApp, CRM and other tools?',
                        'Yes. We can integrate WhatsApp, CRM systems and other tools your admissions or operations team uses.',
                    ],
                    [
                        'Can you build test series and online examination platforms?',
                        'Yes. We can build test series and examination platforms with assessments, results, rankings and performance tracking.',
                    ],
                    [
                        'Can you help with SEO and digital marketing?',
                        'Yes. We offer SEO, paid advertising and digital marketing to improve visibility and generate more relevant enquiries.',
                    ],
                ],
            ],

        ];

        foreach ($sets as $set) {
            foreach ($set['items'] as $i => [$question, $answer]) {
                Faq::updateOrCreate(
                    array_merge($set['where'], ['question' => $question]),
                    [
                        'answer'     => $answer,
                        'sort_order' => $i + 1,
                        'status'     => 1,
                    ]
                );
            }
        }
    }
}