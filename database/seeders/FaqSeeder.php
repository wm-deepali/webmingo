<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'What types of websites does Web Mingo develop?',
                'We design and develop custom business websites, corporate websites, industry-specific websites, landing pages, portals and other digital experiences based on your business requirements.',
            ],
            [
                'Can you build an e-commerce website for our business?',
                'Yes. We can develop custom e-commerce websites with product management, categories, search, filters, customer accounts, payments, order management and other features required for your business.',
            ],
            [
                'Can you develop a custom web application?',
                'Yes. We build custom web applications around specific business workflows, including dashboards, portals, management systems, automation tools and other functionality that standard websites cannot provide.',
            ],
            [
                'Do you develop LMS and education platforms?',
                'Yes. We can build learning platforms with courses, student accounts, video lessons, assessments, assignments, progress tracking, notifications, payments and administrative tools based on your requirements.',
            ],
            [
                'Can you develop mobile applications along with our website?',
                'Yes. Mobile applications can be planned alongside your website or web application to create a connected digital experience across web and mobile platforms.',
            ],
            [
                "Can you help improve our website's SEO?",
                'Yes. Our development approach considers technical SEO, responsive performance, page structure, heading hierarchy, internal linking and other foundations that support search visibility.',
            ],
            [
                'Can you redesign our existing website without losing its current functionality?',
                'Yes. Existing websites can be redesigned while preserving important functionality, integrations and business workflows. We first understand the current setup before making frontend or structural changes.',
            ],
            [
                'How long does a website or custom platform take to develop?',
                'The timeline depends on the project scope, number of pages, features, integrations and level of custom development required. We define the scope and estimated timeline before development begins.',
            ],
            [
                'Can you integrate third-party APIs and business tools?',
                'Yes. Depending on the project, we can integrate payment gateways, APIs, CRM systems, communication tools, analytics platforms and other third-party services.',
            ],
            [
                'Will our team be able to manage the website after launch?',
                'Yes. Where required, we can provide an appropriate admin or content management system so authorised team members can manage relevant website content and business information.',
            ],
            [
                'Do you provide support after the website or application goes live?',
                'Yes. Ongoing support, maintenance and future improvements can be planned according to the requirements of the project.',
            ],
            [
                'How do we get started with a project?',
                'Share your requirements with us through the enquiry form. We will understand your goals, discuss the required solution and determine the appropriate next steps.',
            ],
        ];

        foreach ($faqs as $i => [$question, $answer]) {
            Faq::updateOrCreate(
                [
                    'type'     => Faq::TYPE_GENERAL,
                    'question' => $question,
                ],
                [
                    'service'     => null,
                    'sub_service' => null,
                    'industry'    => null,
                    'answer'      => $answer,
                    'sort_order'  => $i + 1,
                    'status'      => 1,
                ]
            );
        }
    }
}