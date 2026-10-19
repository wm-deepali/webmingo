<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CareerSeeder extends Seeder
{
    public function run(): void
    {
        $careers = [
            [
                'title'             => 'Senior Frontend Developer',
                'department'        => 'Development',
                'type'              => 'Job',
                'employment_type'   => 'Full-time',
                'work_mode'         => 'Hybrid',
                'location'          => 'Noida',
                'experience'        => '3–5 Years',
                'salary'            => '₹4 LPA – ₹8 LPA',
                'short_description' => 'Build and maintain scalable, high-performance interfaces across our core product suite.',
                'description'       => '<p>We’re looking for a passionate frontend developer who can turn ideas and designs into fast, responsive, accessible, and high-quality digital experiences.</p>'
                                     . '<p>You’ll work closely with designers, developers, marketers, and project managers to build websites and digital products that solve real business problems.</p>',
                'responsibilities'  => [
                    'Develop responsive websites and digital experiences from approved UI/UX designs.',
                    'Build clean, reusable, and maintainable frontend components.',
                    'Work with HTML, CSS/SASS, JavaScript, jQuery, and modern frontend development practices.',
                    'Ensure websites work smoothly across desktop, tablet, and mobile devices.',
                    'Collaborate closely with designers, backend developers, and project managers.',
                    'Identify and resolve frontend bugs, layout issues, and performance problems.',
                    'Maintain existing websites while implementing new features without affecting functionality.',
                ],
                'requirements'      => [
                    '3–5 years of professional frontend development experience.',
                    'Strong knowledge of HTML5, CSS3, SASS, JavaScript, and responsive development.',
                    'Experience working with Figma or other UI/UX design files.',
                    'Strong understanding of responsive and mobile-first development.',
                    'Good understanding of website performance and cross-browser compatibility.',
                    'Familiarity with Git and modern frontend workflows.',
                    'Strong attention to detail and a problem-solving mindset.',
                ],
                'nice_to_have'      => [
                    'Experience with WordPress, PHP, Laravel, or other CMS/backend environments.',
                    'Understanding of SEO-friendly frontend development.',
                    'Experience optimizing Core Web Vitals and website performance.',
                    'Familiarity with animation libraries or interactive web experiences.',
                    'Ability to understand business requirements and translate them into practical solutions.',
                ],
            ],
            [
                'title'             => 'UI/UX Designer',
                'department'        => 'Design',
                'type'              => 'Job',
                'employment_type'   => 'Full-time',
                'work_mode'         => 'Hybrid',
                'location'          => 'Noida',
                'experience'        => '2–4 Years',
                'salary'            => null,
                'short_description' => 'Own end-to-end design for new features — from research and wireframes to production-ready interfaces.',
                'description'       => '<p>We’re looking for a UI/UX designer who can turn business requirements into clear, usable, and visually strong digital experiences.</p>'
                                     . '<p>You’ll work with developers, marketers, and project managers to design websites and applications that are easy to use and built to perform.</p>',
                'responsibilities'  => [
                    'Understand project requirements and translate them into user flows and wireframes.',
                    'Design clean, modern, and responsive interfaces for websites and applications.',
                    'Create and maintain design systems, components, and style guides.',
                    'Prepare clear design files and hand them over to the development team.',
                    'Review the built product and make sure it matches the approved design.',
                    'Improve existing designs based on feedback and usability findings.',
                ],
                'requirements'      => [
                    '2–4 years of experience in UI/UX or web design.',
                    'Strong command of Figma or similar design tools.',
                    'A portfolio showing web and mobile design work.',
                    'Good understanding of typography, layout, colour, and spacing.',
                    'Knowledge of responsive and mobile-first design principles.',
                    'Clear communication and ability to explain design decisions.',
                ],
                'nice_to_have'      => [
                    'Basic knowledge of HTML and CSS.',
                    'Experience with motion design or micro-interactions.',
                    'Experience designing e-commerce or SaaS interfaces.',
                ],
            ],
            [
                'title'             => 'Digital Marketing Strategist',
                'department'        => 'Marketing',
                'type'              => 'Job',
                'employment_type'   => 'Full-time',
                'work_mode'         => 'Remote',
                'location'          => 'India',
                'experience'        => '3–5 Years',
                'salary'            => null,
                'short_description' => 'Shape campaigns, positioning, and messaging that connect us with new audiences.',
                'description'       => '<p>We’re looking for a digital marketing strategist who can plan and run campaigns that bring in the right audience and turn attention into enquiries.</p>'
                                     . '<p>You’ll work across SEO, paid media, social media, and content to support both Web Mingo and our clients’ growth.</p>',
                'responsibilities'  => [
                    'Plan and manage digital marketing strategies across SEO, social media, and paid campaigns.',
                    'Run and optimise Google Ads and Meta Ads campaigns.',
                    'Track performance and prepare clear reports with practical recommendations.',
                    'Work with designers and writers to create effective campaign content.',
                    'Research competitors, keywords, and audience behaviour.',
                ],
                'requirements'      => [
                    '3–5 years of experience in digital marketing.',
                    'Hands-on experience with Google Ads, Meta Ads, and Google Analytics.',
                    'Good understanding of on-page and off-page SEO.',
                    'Strong analytical, planning, and communication skills.',
                ],
                'nice_to_have'      => [
                    'Experience marketing websites, e-commerce stores, or IT services.',
                    'Knowledge of email marketing and marketing automation tools.',
                    'Basic understanding of conversion rate optimisation.',
                ],
            ],
            [
                'title'             => 'Business Development Executive',
                'department'        => 'Business Development',
                'type'              => 'Job',
                'employment_type'   => 'Full-time',
                'work_mode'         => 'Onsite',
                'location'          => 'Noida',
                'experience'        => '1–3 Years',
                'salary'            => null,
                'short_description' => 'Identify new opportunities and help grow our partner and client base.',
                'description'       => '<p>We’re looking for a business development executive who can find new opportunities, build relationships, and help businesses understand how Web Mingo can support their digital goals.</p>',
                'responsibilities'  => [
                    'Identify and connect with potential clients and partners.',
                    'Understand client requirements and coordinate with the technical team on proposals.',
                    'Prepare and share quotations, presentations, and follow-ups.',
                    'Maintain lead records and report on progress.',
                    'Build and maintain long-term client relationships.',
                ],
                'requirements'      => [
                    '1–3 years of experience in business development or IT sales.',
                    'Excellent communication and negotiation skills.',
                    'Understanding of website, mobile app, and digital marketing services.',
                    'Ability to work independently and meet targets.',
                ],
                'nice_to_have'      => [
                    'Experience with CRM tools and lead generation platforms.',
                    'Experience selling to small and mid-sized businesses.',
                ],
            ],
        ];

        foreach ($careers as $i => $c) {
            Career::updateOrCreate(
                ['slug' => Str::slug($c['title'])],
                [
                    'title'             => $c['title'],
                    'department'        => $c['department'],
                    'type'              => $c['type'],
                    'employment_type'   => $c['employment_type'],
                    'work_mode'         => $c['work_mode'],
                    'location'          => $c['location'],
                    'experience'        => $c['experience'],
                    'salary'            => $c['salary'],
                    'short_description' => $c['short_description'],
                    'description'       => $c['description'],
                    'responsibilities'  => implode("\n", $c['responsibilities']),
                    'requirements'      => implode("\n", $c['requirements']),
                    'nice_to_have'      => implode("\n", $c['nice_to_have']),
                    'meta_title'        => $c['title'] . ' | Careers at Web Mingo',
                    'meta_description'  => $c['short_description'],
                    'status'            => true,
                    'sort_order'        => $i + 1,
                ]
            );
        }
    }
}