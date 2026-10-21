<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SeoPage;

class SeoPageSeeder extends Seeder
{
    public function run(): void
    {
        // ⚠️ Change these to your real brand / domain
        $brand  = config('app.name', 'YourBrand');
        $ogImage = '/images/og-default.jpg'; // 1200x630

        // [page_key (= route name), page_name, group, slug, title (no brand), description, priority, changefreq]
        $pages = [
            // ───────── Main pages ─────────
            ['home', 'Home', 'main', '/',
                'Web, App & Digital Marketing Agency',
                'We design and build websites, mobile apps and digital marketing campaigns that grow your business. Get a free consultation with our expert team today.',
                1.0, 'weekly'],
            ['about', 'About Us', 'main', '/about',
                'About Us',
                'Learn about our story, mission and the passionate team of designers, developers and marketers who help businesses grow online.',
                0.8, 'monthly'],
            ['lifeAt', 'Life at Company', 'main', '/lifeAt',
                'Life at ' . $brand . ' – Culture & Team',
                'Explore our workplace culture, team events and values. See what it is like to build your career with us.',
                0.5, 'monthly'],
            ['Knowledge-base', 'Knowledge Base', 'main', '/Knowledge-base',
                'Knowledge Base & Resources',
                'Guides, tips and resources on web development, SEO, digital marketing and app development to help you make smarter online decisions.',
                0.6, 'weekly'],
            ['our-works', 'Our Works', 'main', '/our-works',
                'Our Work – Portfolio & Case Studies',
                'Browse our portfolio of websites, apps and marketing projects delivered for clients across industries, with real results.',
                0.8, 'weekly'],
            ['faqs', 'FAQs', 'main', '/faqs',
                'Frequently Asked Questions',
                'Find answers to common questions about our services, pricing, process, timelines and support.',
                0.6, 'monthly'],
            ['blog', 'Blog', 'main', '/blogs',
                'Blog – Insights on Web, SEO & Marketing',
                'Read the latest articles, tutorials and industry insights on web development, SEO, social media and mobile apps.',
                0.8, 'daily'],
            ['career', 'Careers', 'main', '/careers',
                'Careers – Join Our Team',
                'Explore open positions and join a growing team. Apply today for roles in development, design and digital marketing.',
                0.6, 'weekly'],
            ['contact', 'Contact Us', 'main', '/contact',
                'Contact Us – Get a Free Quote',
                'Have a project in mind? Contact us for a free consultation and quote. We reply within one business day.',
                0.9, 'monthly'],

            // ───────── Web development services ─────────
            ['website-design-development', 'Website Design & Development', 'service', '/website-design-development',
                'Website Design & Development Services',
                'Custom, fast and responsive website design and development that converts visitors into customers. Get a free quote today.',
                0.9, 'monthly'],
            ['business-website-development', 'Business Website Development', 'service', '/business-website-development',
                'Business Website Development',
                'Professional business websites that build trust, rank on Google and generate leads. SEO-ready, mobile-first and easy to manage.',
                0.8, 'monthly'],
            ['E-Commerce-website-development', 'E-Commerce Website Development', 'service', '/E-Commerce-website-development',
                'E-Commerce Website Development',
                'Launch a secure, high-converting online store with payment gateways, inventory management and SEO built in.',
                0.8, 'monthly'],
            ['E-Learning-LMS-development', 'E-Learning & LMS Development', 'service', '/E-Learning-LMS-development',
                'E-Learning & LMS Development',
                'Custom learning management systems with courses, live classes, quizzes and analytics for institutes and businesses.',
                0.8, 'monthly'],
            ['classified-portals-development', 'Classified Portals Development', 'service', '/classified-portals-development',
                'Classified Portal Development',
                'Build scalable classified and listing portals with search, filters, user dashboards and monetisation options.',
                0.7, 'monthly'],
            ['custom-web-applications-development', 'Custom Web Applications', 'service', '/custom-web-applications-development',
                'Custom Web Application Development',
                'Secure, scalable custom web applications and portals tailored to your workflows, built with modern frameworks.',
                0.8, 'monthly'],

            // ───────── Digital marketing services ─────────
            ['digital-marketing', 'Digital Marketing', 'service', '/digital-marketing',
                'Digital Marketing Services',
                'Data-driven digital marketing including SEO, social media and paid ads that bring qualified leads and measurable growth.',
                0.9, 'monthly'],
            ['search-engine-optimisation', 'Search Engine Optimisation', 'service', '/search-engine-optimisation',
                'SEO Services – Rank Higher on Google',
                'Boost organic traffic and rankings with technical SEO, content strategy and link building from experienced SEO specialists.',
                0.9, 'monthly'],
            ['social-media-marketing', 'Social Media Marketing', 'service', '/social-media-marketing',
                'Social Media Marketing Services',
                'Grow your brand and engagement on Instagram, Facebook, LinkedIn and more with creative content and community management.',
                0.8, 'monthly'],
            ['google-ads-management', 'Google Ads Management', 'service', '/google-ads-management',
                'Google Ads Management Services',
                'Certified Google Ads experts who plan, run and optimise Search, Display and Shopping campaigns for maximum ROI.',
                0.8, 'monthly'],
            ['meta-ads-management', 'Meta Ads Management', 'service', '/meta-ads-management',
                'Meta Ads (Facebook & Instagram) Management',
                'Targeted Facebook and Instagram ad campaigns that generate leads and sales with clear tracking and reporting.',
                0.8, 'monthly'],

            // ───────── Mobile app services ─────────
            ['mobile-app-development', 'Mobile App Development', 'service', '/mobile-app-development',
                'Mobile App Development Company',
                'End-to-end mobile app development for Android and iOS, from idea and UI design to launch and long-term support.',
                0.9, 'monthly'],
            ['android-applications-development', 'Android App Development', 'service', '/android-applications-development',
                'Android App Development Services',
                'Build fast, secure and user-friendly Android apps that scale, from startups to enterprises.',
                0.8, 'monthly'],
            ['iOS-applications-development', 'iOS App Development', 'service', '/iOS-applications-development',
                'iOS App Development Services',
                'Native iPhone and iPad app development with polished design, strong performance and App Store launch support.',
                0.8, 'monthly'],
            ['flutter-app-development', 'Flutter App Development', 'service', '/flutter-app-development',
                'Flutter App Development Services',
                'Cross-platform Flutter apps for Android and iOS from a single codebase, saving time and cost without compromising quality.',
                0.8, 'monthly'],

            // ───────── Branding & creative services ─────────
            ['digital-branding', 'Digital Branding', 'service', '/digital-branding',
                'Digital Branding Services',
                'Build a memorable brand identity with strategy, logo, visual language and consistent digital presence.',
                0.8, 'monthly'],
            ['graphic-designing', 'Graphic Designing', 'service', '/graphic-designing',
                'Graphic Design Services',
                'Creative graphic design for logos, social media, brochures, packaging and ads that make your brand stand out.',
                0.7, 'monthly'],
            ['video-creations', 'Video Creation', 'service', '/video-creations',
                'Video Creation & Editing Services',
                'Engaging promo videos, reels, explainers and corporate films that tell your story and drive results.',
                0.7, 'monthly'],

            // ───────── Industry pages ─────────
            ['education-coaching', 'Education & Coaching', 'industry', '/education-coaching',
                'Digital Solutions for Education & Coaching',
                'Websites, LMS platforms, apps and marketing for schools, coaching institutes and ed-tech businesses to attract more students.',
                0.7, 'monthly'],
            ['retail-E-Commerce-D2C', 'Retail, E-Commerce & D2C', 'industry', '/retail-E-Commerce-D2C',
                'Digital Solutions for Retail & D2C Brands',
                'Online stores, performance marketing and branding for retail, e-commerce and D2C brands that want to scale sales.',
                0.7, 'monthly'],
            ['real-state', 'Real Estate', 'industry', '/real-state',
                'Digital Solutions for Real Estate',
                'Property websites, lead generation campaigns and CRM-ready solutions that help real estate businesses sell faster.',
                0.7, 'monthly'],
            ['healthcare-clinics', 'Healthcare & Clinics', 'industry', '/healthcare-clinics',
                'Digital Solutions for Healthcare & Clinics',
                'Clinic websites, appointment booking and local SEO that help healthcare providers reach and retain more patients.',
                0.7, 'monthly'],
            ['NGO-Non-Profits', 'NGO & Non-Profits', 'industry', '/NGO-Non-Profits',
                'Digital Solutions for NGOs & Non-Profits',
                'Impactful websites, donation platforms and awareness campaigns that help non-profits grow supporters and funding.',
                0.6, 'monthly'],
            ['manufacturing-export', 'Manufacturing & Export', 'industry', '/manufacturing-export',
                'Digital Solutions for Manufacturing & Export',
                'B2B websites, catalogues and lead generation that help manufacturers and exporters reach global buyers.',
                0.6, 'monthly'],
            ['hotels-hospitality', 'Hotels & Hospitality', 'industry', '/hotels-hospitality',
                'Digital Solutions for Hotels & Hospitality',
                'Hotel websites, booking engines and marketing that drive direct bookings and fill more rooms.',
                0.6, 'monthly'],
            ['travel-tourism', 'Travel & Tourism', 'industry', '/travel-tourism',
                'Digital Solutions for Travel & Tourism',
                'Travel websites, itinerary and booking systems, plus marketing that turns browsers into travellers.',
                0.6, 'monthly'],
        ];

        foreach ($pages as [$key, $name, $group, $slug, $title, $desc, $priority, $freq]) {
            $fullTitle = str_contains($title, $brand) ? $title : $title . ' | ' . $brand;

            SeoPage::updateOrCreate(
                ['page_key' => $key],
                [
                    'page_name'           => $name,
                    'page_group'          => $group,
                    'slug'                => $slug,
                    'meta_title'          => $fullTitle,
                    'meta_description'    => $desc,
                    'robots'              => 'index, follow',
                    'og_title'            => $fullTitle,
                    'og_description'      => $desc,
                    'og_image'            => $ogImage,
                    'og_type'             => $key === 'blog' ? 'website' : 'website',
                    'twitter_card'        => 'summary_large_image',
                    'twitter_title'       => $fullTitle,
                    'twitter_description' => $desc,
                    'twitter_image'       => $ogImage,
                    'in_sitemap'          => true,
                    'sitemap_priority'    => $priority,
                    'sitemap_changefreq'  => $freq,
                    'is_active'           => true,
                ]
            );
        }
    }
}