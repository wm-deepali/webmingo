<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->sets() as $set) {
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

    private function sets(): array
    {
        return [

            /* ═════════════ GENERAL (home + /faqs) ═════════════ */
            [
                'where' => $this->general(),
                'items' => [
                    ['What types of websites does Web Mingo develop?', 'We design and develop custom business websites, corporate websites, industry-specific websites, landing pages, portals and other digital experiences based on your business requirements.'],
                    ['Can you build an e-commerce website for our business?', 'Yes. We can develop custom e-commerce websites with product management, categories, search, filters, customer accounts, payments, order management and other features required for your business.'],
                    ['Can you develop a custom web application?', 'Yes. We build custom web applications around specific business workflows, including dashboards, portals, management systems, automation tools and other functionality that standard websites cannot provide.'],
                    ['Do you develop LMS and education platforms?', 'Yes. We can build learning platforms with courses, student accounts, video lessons, assessments, assignments, progress tracking, notifications, payments and administrative tools based on your requirements.'],
                    ['Can you develop mobile applications along with our website?', 'Yes. Mobile applications can be planned alongside your website or web application to create a connected digital experience across web and mobile platforms.'],
                    ["Can you help improve our website's SEO?", 'Yes. Our development approach considers technical SEO, responsive performance, page structure, heading hierarchy, internal linking and other foundations that support search visibility.'],
                    ['Can you redesign our existing website without losing its current functionality?', 'Yes. Existing websites can be redesigned while preserving important functionality, integrations and business workflows. We first understand the current setup before making frontend or structural changes.'],
                    ['How long does a website or custom platform take to develop?', 'The timeline depends on the project scope, number of pages, features, integrations and level of custom development required. We define the scope and estimated timeline before development begins.'],
                    ['Can you integrate third-party APIs and business tools?', 'Yes. Depending on the project, we can integrate payment gateways, APIs, CRM systems, communication tools, analytics platforms and other third-party services.'],
                    ['Will our team be able to manage the website after launch?', 'Yes. Where required, we can provide an appropriate admin or content management system so authorised team members can manage relevant website content and business information.'],
                    ['Do you provide support after the website or application goes live?', 'Yes. Ongoing support, maintenance and future improvements can be planned according to the requirements of the project.'],
                    ['How do we get started with a project?', 'Share your requirements with us through the enquiry form. We will understand your goals, discuss the required solution and determine the appropriate next steps.'],
                ],
            ],

            /* ═════════════ SERVICE: Website Design & Development ═════════════ */
            [
                'where' => $this->service('website-design-development'),
                'items' => [
                    ['What type of website does my business need?', 'It depends on what the website needs to do. A business website works well for showcasing services and generating enquiries, while e-commerce is suited to selling products online. If you need custom workflows, logins or dashboards, a web application may be more suitable.'],
                    ['Can you redesign my existing website instead of building a new one?', 'Yes. We can review your existing website, content, design and business goals, then recommend whether a complete redesign, targeted improvements or a fresh build is the right approach.'],
                    ['Will my website work properly on mobile and tablet devices?', 'Yes. Websites are developed with responsive layouts so content, navigation, forms and key functionality adapt across mobile, tablet and desktop screen sizes.'],
                    ['Can you integrate forms, CRM, payment gateways or other tools?', 'Yes. We can integrate enquiry forms, CRM systems, payment gateways, analytics, chat tools and other third-party services based on your business requirements and available integrations.'],
                    ['Can the website be expanded as my business grows?', 'Yes. The website structure can be planned with future growth in mind, allowing you to add pages, features, products, integrations and other functionality as your requirements evolve.'],
                ],
            ],

            [
                'where' => $this->service('website-design-development', 'business-website-development'),
                'items' => [
                    ['How long does it take to build a business website?', 'Timeline depends on the number of pages, functionality, content and integrations required. We share a clear timeline after understanding your project.'],
                    ['How much does a business website cost?', 'Cost depends on the pages, features, design complexity and integrations required. We provide a clear estimate after understanding your project.'],
                    ['Can I request custom pages or features?', "Yes. If something isn't listed, you can add it as a custom requirement and our team will scope it with you."],
                    ['Can you integrate my CRM or other business tools?', 'Yes. Depending on the platform and available integrations or APIs, we can connect your website with CRM, ERP, booking and other business systems.'],
                    ['Will the website work on mobile and be SEO-friendly?', 'Yes. We build responsive websites that work across desktop, tablet and mobile, with an SEO-friendly structure to support search visibility.'],
                ],
            ],

            // NOTE: no blade/FAQ copy was provided for this page, so these are written for you to review.
            [
                'where' => $this->service('website-design-development', 'E-Commerce-website-development'),
                'items' => [
                    ['Can you build a custom e-commerce website for my business?', 'Yes. We can build an online store around your products, categories, pricing, customer journey and business requirements instead of forcing you into a fixed structure.'],
                    ['Which payment gateways can you integrate?', 'We can integrate suitable payment gateways based on your business and region, along with options such as coupons, order confirmations and payment status handling.'],
                    ['Can I manage products, orders and customers myself?', 'Yes. We provide an admin panel where authorised team members can manage products, categories, orders, customers and other store information.'],
                    ['Can the store connect with inventory, shipping and CRM tools?', 'Yes. Depending on available APIs and integration methods, the store can be connected with inventory, shipping, CRM, WhatsApp, analytics and other business tools.'],
                    ['Will the store be mobile-friendly and SEO-ready?', 'Yes. Stores are built with responsive layouts and an SEO-friendly structure so customers can browse and buy comfortably on any device.'],
                ],
            ],

            [
                'where' => $this->service('website-design-development', 'E-Learning-LMS-development'),
                'items' => [
                    ['Can you build a completely custom LMS for our institute?', 'Yes. We can design and develop a custom LMS around your courses, students, faculty, assessments, workflows and business requirements instead of forcing your organisation into a fixed platform structure.'],
                    ['Can you develop an LMS for coaching and test preparation businesses?', 'Yes. The LMS can support courses, batches, test series, question banks, results, rankings, study material, faculty workflows and other education-specific requirements.'],
                    ['What is the difference between a single-tenant and multi-tenant LMS?', 'A single-tenant LMS is built for one organisation, while a multi-tenant or white-label LMS allows multiple institutes to operate independently within one centrally managed platform.'],
                    ['Can the LMS integrate with our CRM, ERP and other systems?', 'Yes. CRM, ERP, payment gateways, video platforms and other third-party services can be connected through available APIs or custom integration workflows based on your requirements.'],
                    ['Can you build Android and iOS apps along with the LMS?', 'Yes. Android and iOS applications can be developed alongside the LMS to provide students, faculty and administrators with a connected mobile learning experience.'],
                ],
            ],

            [
                'where' => $this->service('website-design-development', 'classified-portals-development'),
                'items' => [
                    ['Can you build a completely custom classified portal?', 'Yes. We can develop a custom classified portal around your categories, listing structure, seller workflows, search requirements, monetisation model and business rules.'],
                    ['Can users create and manage their own listings?', 'Yes. Sellers can create, edit, manage, renew and monitor their listings through dedicated seller tools based on the workflow defined for your marketplace.'],
                    ['Can you build advanced search and filtering?', 'Yes. Search and filters can be tailored to your categories with options such as location, price, condition, attributes, availability and other marketplace-specific requirements.'],
                    ['Can you integrate online payments and paid listings?', 'Yes. Payment gateways can support paid listings, featured listings, seller packages, subscriptions and other monetisation models required by your classified marketplace.'],
                    ['Can administrators manage and moderate listings and sellers?', 'Yes. A custom admin panel can provide listing approval, seller management, verification, reporting, category controls, moderation and other tools for managing the marketplace.'],
                ],
            ],

            [
                'where' => $this->service('website-design-development', 'custom-web-applications-development'),
                'items' => [
                    ['How much does a custom web application cost?', "The cost depends on the application's scope, workflows, number of users, modules, integrations, complexity and development requirements."],
                    ['How long does custom application development take?', "The timeline depends on the application's features, workflow complexity, integrations, testing requirements and overall scope."],
                    ['Will I own the source code?', 'Source-code ownership and licensing can be defined according to the project agreement and scope.'],
                    ['Can I request changes after development starts?', 'Yes. Requirements can evolve during development, and changes can be reviewed based on their impact on scope and timeline.'],
                    ['Can you integrate my existing software?', 'Yes. Where APIs or supported integration methods are available, the application can be connected with existing systems and third-party services.'],
                    ['Can you build a completely custom workflow?', 'Yes. Custom applications are specifically suited to businesses with workflows that do not fit standard software.'],
                    ['Do you provide hosting and deployment?', "Deployment and hosting requirements can be discussed based on the application's infrastructure and business needs."],
                    ['Do you provide support after launch?', 'Yes. Ongoing support, maintenance and future improvements can be planned according to the project requirements.'],
                ],
            ],

            /* ═════════════ SERVICE: Digital Marketing ═════════════ */
            [
                'where' => $this->service('digital-marketing'),
                'items' => [
                    ['Which digital marketing service is right for my business?', 'It depends on your goals, audience, industry and current digital presence. We assess these factors to identify the channels and services that align with your business requirements.'],
                    ['Can you manage multiple digital marketing services together?', 'Yes. Services such as SEO, social media marketing, Google Ads and Meta Ads can be combined into a connected strategy, with each channel supporting a specific business objective.'],
                    ['How long does digital marketing take to show results?', 'Timelines vary by service, industry, competition, starting position and goals. Paid campaigns can generate activity quickly, while organic channels such as SEO generally require more time to build consistent visibility.'],
                    ['How do you decide where my marketing budget should go?', 'We consider your business goals, target audience, competition, existing performance and available channels before determining where marketing effort and budget can be appropriately focused.'],
                    ['How do you measure digital marketing performance?', 'We track metrics relevant to your objectives, including visibility, website traffic, engagement, leads, conversions and campaign efficiency, then use the data to guide ongoing improvements.'],
                ],
            ],

            [
                'where' => $this->service('digital-marketing', 'search-engine-optimisation'),
                'items' => [
                    ['What is SEO and how does it work?', 'SEO improves how search engines understand and rank your website by optimizing content, structure and technical foundations so relevant users can find your business through search.'],
                    ['How long does SEO take to show results?', "SEO is a gradual process. Timelines vary based on your website's starting point, competition, search demand and how consistently SEO improvements are implemented."],
                    ['What is the difference between on-page and off-page SEO?', 'On-page SEO focuses on website content, titles, structure and internal optimization, while off-page SEO focuses on external signals such as relevant links, mentions and overall authority.'],
                    ['Why is technical SEO important?', 'Technical SEO helps search engines crawl, understand and index your website properly while improving important foundations such as site structure, performance and accessibility.'],
                    ['How do you measure SEO performance?', 'We measure SEO using search visibility, organic traffic, keyword performance, engagement and relevant conversions, then track progress against the goals defined for your business.'],
                ],
            ],

            [
                'where' => $this->service('digital-marketing', 'social-media-marketing'),
                'items' => [
                    ['How long does it take to see results from social media marketing?', 'Social media growth builds gradually. Results vary based on your audience, industry, content strategy, platform activity and consistency over time.'],
                    ['Do you create the content, or do we need to provide it?', 'We can handle the strategy, content planning, copywriting and creative direction. Existing brand assets and business inputs can also be incorporated into the content.'],
                    ['Which social media platforms do you manage?', 'We can manage platforms such as Instagram, Facebook, LinkedIn, YouTube and Pinterest based on your audience, business goals and where your customers are most active.'],
                    ['Do you manage paid advertising along with organic social media?', 'Yes. Paid social campaigns can be managed alongside organic content to support objectives such as reach, engagement, website traffic and lead generation.'],
                    ['How do you measure social media marketing performance?', 'We track relevant metrics such as reach, engagement, audience growth, website traffic and enquiries, then report performance against the goals defined for your business.'],
                ],
            ],

            [
                'where' => $this->service('digital-marketing', 'google-ads-management'),
                'items' => [
                    ['What is the minimum budget required for Google Ads?', 'There is no fixed minimum that works for every business. The starting budget depends on your industry, competition, target locations, keywords and campaign objectives.'],
                    ['How long does it take to see results from Google Ads?', 'Campaigns can generate data and initial results shortly after launch, while more reliable performance insights generally require ongoing testing, data collection and optimization.'],
                    ['What types of Google Ads campaigns do you manage?', 'We can manage Search, Display, Shopping, YouTube, Performance Max and Remarketing campaigns based on your business goals, audience and advertising requirements.'],
                    ['Can you set up conversion tracking for my website?', 'Yes. Conversion tracking can be configured for relevant actions such as enquiry forms, calls, purchases and other measurable actions that matter to your campaign goals.'],
                    ['How do you reduce wasted ad spend?', 'We review search terms, keywords, targeting, bids, budgets and campaign performance regularly to identify irrelevant traffic and refine campaigns toward more relevant opportunities.'],
                ],
            ],

            [
                'where' => $this->service('digital-marketing', 'meta-ads-management'),
                'items' => [
                    ['What is the minimum budget required for Meta Ads?', 'There is no fixed minimum for every business. The starting budget depends on your industry, audience, target locations, campaign objective and the level of testing required.'],
                    ['Will the Meta ad account belong to us?', 'Yes. Your Meta Business account and advertising assets remain under your ownership, while our team can be given the required access to manage campaigns.'],
                    ['Do you create ad creatives, or do we need to provide them?', 'We can create image, video and carousel ad creatives based on your campaign goals and brand guidelines. Existing assets can also be incorporated where appropriate.'],
                    ['Do you manage both Facebook and Instagram Ads?', 'Yes. Campaigns can be managed across Facebook and Instagram, with targeting, placements and creative variations adjusted according to your audience and campaign objectives.'],
                    ['Can you set up Meta Pixel and Conversions API?', 'Yes. Meta Pixel and Conversions API can be configured where supported by your website and technical setup to help measure relevant actions and campaign performance.'],
                ],
            ],

            /* ═════════════ SERVICE: Mobile App Development ═════════════ */
            [
                'where' => $this->service('mobile-app-development'),
                'items' => [
                    ['What type of mobile app does my business need?', 'The right approach depends on your users, business model, required features, target platforms and the goals you want the application to achieve.'],
                    ['Should I build an iOS app, Android app or both?', 'The choice depends on your target audience, business requirements and platform strategy. We can help determine the right approach for your users.'],
                    ['Can you build a custom app from my idea?', 'Yes. We can turn your business idea into a structured mobile application with defined features, user journeys, interfaces and functionality.'],
                    ['Can the app connect with my existing website or business system?', 'Yes. Mobile apps can integrate with websites, APIs, databases, payment gateways, CRM platforms and other business systems as required.'],
                    ['Can the app be expanded as my business grows?', 'Yes. We can plan the application with future features, integrations and scalability in mind so it can evolve with your product and business needs.'],
                ],
            ],

            [
                'where' => $this->service('mobile-app-development', 'android-applications-development'),
                'items' => [
                    ['Should I choose Android, iOS, or Flutter?', "It depends on your audience and goals. Choose Android if mass reach across India and emerging markets through the Google Play ecosystem is your priority, which is what this page covers. Choose iOS if you're targeting a premium, App Store audience with higher spending users and want a brand-conscious experience. Choose Flutter if you're budget or timeline-conscious and want both Android and iOS built from a single codebase, faster and at lower cost."],
                    ['How long does Play Store approval take?', 'Google Play review typically takes a few hours to a few days, though it can take longer if your app requires additional compliance checks.'],
                    ['What factors affect the cost of an Android app?', 'Cost depends on app complexity, number of screens, backend requirements, third-party integrations, and design scope. We provide a clear estimate after understanding your requirements.'],
                    ['How long does development typically take?', 'A standard business or e-commerce app typically takes 6–12 weeks depending on feature scope, with more complex apps taking longer.'],
                    ['Will I own the source code?', 'Yes, once the project is delivered, full source code and Play Store account access remain fully yours.'],
                    ['Do you provide support after the app is launched?', 'Yes, we offer post-launch maintenance packages covering bug fixes, OS updates, and minor feature enhancements.'],
                ],
            ],

            [
                'where' => $this->service('mobile-app-development', 'iOS-applications-development'),
                'items' => [
                    ['How long does it take to develop an iOS application?', "Timeline depends on the app's complexity, number of features, integrations, design requirements, testing, and backend development. We provide a realistic timeline once your requirements are understood."],
                    ['How much does iOS app development cost?', 'Cost depends on app complexity, number of screens, custom features, backend requirements, API integrations, payment and notification functionality, and testing needs. We recommend requesting a project-specific estimate.'],
                    ['Do you develop native iOS applications?', "Yes, iOS applications are developed using native technologies such as Swift, with the specific approach selected according to the project's requirements."],
                    ['Can you integrate Apple Pay, APIs, maps, and OTP?', 'Required third-party integrations can be planned and implemented based on technical compatibility, business needs, and provider requirements, including Apple Pay and mapping services where relevant, subject to regional and provider availability.'],
                    ['What is the iOS App Store approval process?', "iOS applications submitted to the App Store must follow Apple's applicable review guidelines and submission requirements. This includes app configuration and release preparation, required app information and metadata, compliance checks, testing before submission, and review by Apple, which may include feedback requiring updates or corrections. We cannot guarantee approval or a fixed review timeline, as requirements can vary depending on the app and Apple's current policies."],
                    ['Can my iOS app support offline functionality?', "Selected offline features may be supported through local data handling and synchronization, depending on the application's workflow and technical requirements."],
                    ['Should I choose Android, iOS, or Flutter?', "Choose Android when your primary audience uses Android devices or your distribution strategy focuses on the Google Play ecosystem. Choose iOS when your product specifically targets Apple users and the App Store ecosystem, which is what this page covers. Consider Flutter when you want Android and iOS applications from a shared codebase and your project is suitable for a cross-platform approach."],
                ],
            ],

            [
                'where' => $this->service('mobile-app-development', 'flutter-app-development'),
                'items' => [
                    ['What is Flutter app development?', "Flutter is a cross-platform UI development framework built with Dart that can support applications for Android and iOS through a shared codebase. Suitability depends on the application's technical requirements and platform-specific needs."],
                    ['How long does it take to develop a Flutter application?', 'Timeline depends on app complexity, number of screens, custom features, UI/UX requirements, API and backend integrations, testing requirements, and platform-specific functionality. We provide a realistic timeline once your requirements are understood.'],
                    ['How much does Flutter app development cost?', 'Cost depends on application scope, number of features and screens, UI/UX complexity, backend requirements, API integrations, payment and notification functionality, and testing and maintenance needs. We recommend requesting a project-specific estimate.'],
                    ['Can Flutter build both Android and iOS applications?', 'Yes, Flutter supports cross-platform application development through a shared codebase. Some platform-specific functionality may require additional implementation based on project requirements.'],
                    ["Flutter vs Native — what's the difference, and which one do I need?", "Flutter uses a shared codebase for Android and iOS, suitable for projects where cross-platform development aligns with requirements and can support an efficient development workflow, though platform-specific integrations may require additional work. Native Android/iOS uses a platform-specific approach with access to platform-specific APIs and capabilities, which may suit applications requiring deep platform specialization.\n\nConsider Native Android when your primary audience or functionality is Android-focused. Consider Native iOS when your product specifically targets Apple users and the App Store ecosystem. Consider Flutter when Android and iOS applications can be developed effectively through a shared codebase and the project suits a cross-platform approach."],
                    ['Can Flutter integrate APIs, payment gateways, and notifications?', 'Flutter applications can integrate required APIs and external services based on technical compatibility, business requirements, and provider requirements. Integrations are planned according to the application architecture.'],
                    ['Can Flutter apps support offline functionality?', "Selected offline features may be supported through local data handling and synchronization, depending on the application's workflow and technical requirements."],
                    ['Can Flutter apps be published on Google Play and the Apple App Store?', 'Flutter supports application builds for relevant platforms. Publishing requires platform-specific configuration, compliance with applicable requirements, testing, and submission processes. We cannot guarantee approval or a fixed review timeline.'],
                ],
            ],

            /* ═════════════ SERVICE: Digital Branding ═════════════ */
            [
                'where' => $this->service('digital-branding'),
                'items' => [
                    ['What does digital branding include?', 'Digital branding can include brand strategy, positioning, visual identity, logo design, typography, colours, brand guidelines and digital brand applications.'],
                    ['Can you create a brand identity from scratch?', 'Yes. We can develop your brand from the initial strategy and positioning through logo design, visual identity and digital brand applications.'],
                    ['Can you redesign my existing brand?', 'Yes. We can review your existing identity and create a refreshed brand direction while retaining the elements that are important to your business.'],
                    ['Can branding include my website and social media?', 'Yes. Your brand identity can be applied consistently across your website, social media, campaigns and other important digital touchpoints.'],
                    ['Do you provide brand guidelines?', 'Yes. Brand guidelines can define how your logo, colours, typography, imagery and other identity elements should be used across digital channels.'],
                ],
            ],

            [
                'where' => $this->service('digital-branding', 'graphic-designing'),
                'items' => [
                    ['What digital branding services do you offer?', 'We offer graphic design, logo design, social media creatives, marketing visuals, video creation and other custom branding services.'],
                    ['Can you work with our existing brand identity?', 'Yes. We can follow your existing logo, colors, typography and brand guidelines to keep your digital content consistent.'],
                    ['Do you provide both graphic design and video creation?', 'Yes. We create both static visual content and video content for social media, campaigns, promotions and brand communication.'],
                    ['Can you handle ongoing creative requirements?', 'Yes. We can provide ongoing creative support for regular social media designs, marketing campaigns, promotional content and other recurring branding needs.'],
                    ['How can I discuss my branding requirements?', 'Share your requirements through the enquiry form on this page. Our team can then discuss your creative needs, scope and next steps.'],
                ],
            ],

            [
                'where' => $this->service('digital-branding', 'video-creations'),
                'items' => [
                    ['What types of videos do you create?', 'We create social media reels, promotional videos, explainer and animated videos, corporate and brand videos, and video ad creatives, based on your project requirements.'],
                    ['Do you handle shooting, or do you provide editing only?', 'Video shooting and editing support depend on the project scope and available arrangements. Share your requirements with our team to discuss the suitable production approach.'],
                    ['Can you create videos from footage we provide?', "Yes. We can discuss editing and creative post-production requirements using client-provided footage, subject to the project's scope and technical requirements."],
                    ['Do you help with scripting and storyboarding?', 'Yes. Scripting and storyboarding can be discussed as part of the video concept and production process, depending on the selected service.'],
                    ['How long does it take to complete a video?', 'Turnaround time depends on the video type, complexity, footage requirements, revisions, and feedback cycle. The estimated timeline will be discussed during project planning.'],
                    ['Can you create videos for Instagram Reels and YouTube?', 'Yes. Video requirements can be planned for different platforms, including Instagram Reels, YouTube, and digital advertising, based on the intended format and usage.'],
                    ['Do you provide voiceover and background music?', 'Voiceover, music, and sound design requirements can be discussed based on the project scope, creative direction, and agreed deliverables.'],
                    ['How many revisions are included?', 'Revisions are handled according to the agreed project scope and revision terms. The exact revision allowance will be confirmed before the project begins.'],
                    ['Do you offer monthly video content packages?', 'Yes. Ongoing video support can be discussed for recurring social media content, promotional requirements, and other creative needs, based on the agreed scope. If you also need static creatives, our Graphic Designing and Digital Branding services can support those requirements.'],
                    ['How can I request a video project?', 'You can contact our team through the enquiry form or CTA on this page. Share your video requirements, and we can discuss the suitable next steps.'],
                ],
            ],

            /* ═════════════ INDUSTRIES ═════════════ */
            [
                'where' => $this->industry('education-coaching'),
                'items' => [
                    ['What type of education websites can Web Mingo build?', 'We build websites for coaching institutes, schools, colleges, training institutes, exam institutes and online educators.'],
                    ['Can you build an LMS for our institute?', 'Yes. We build LMS platforms with courses, student accounts, study material, assessments and progress tracking.'],
                    ['Can our website include admission enquiries?', 'Yes. Enquiry forms and admission workflows can help students connect with your team and make follow-ups easier.'],
                    ['Can you integrate WhatsApp, CRM and other tools?', 'Yes. We can integrate WhatsApp, CRM systems and other tools your admissions or operations team uses.'],
                    ['Can you build test series and online examination platforms?', 'Yes. We can build test series and examination platforms with assessments, results, rankings and performance tracking.'],
                    ['Can you help with SEO and digital marketing?', 'Yes. We offer SEO, paid advertising and digital marketing to improve visibility and generate more relevant enquiries.'],
                ],
            ],

            [
                'where' => $this->industry('retail-E-Commerce-D2C'),
                'items' => [
                    ['What type of retail or e-commerce website can you build?', 'We build retail websites, e-commerce stores, D2C brand websites, product catalogue websites and custom online stores.'],
                    ['Can I sell my products directly through the website?', 'Yes. Your website can include product pages, shopping cart, checkout, online payments and order management.'],
                    ['Can you integrate payments and delivery options?', 'Yes. We can integrate suitable payment gateways and delivery solutions based on your products and business requirements.'],
                    ['Can you connect inventory, CRM or other business systems?', 'Yes. We can connect your store with inventory, CRM, ERP and other tools to support your retail operations.'],
                    ['Can you help grow our online store after launch?', 'Yes. We offer SEO and digital marketing support to improve visibility, bring more visitors and generate more sales.'],
                ],
            ],

            [
                'where' => $this->industry('real-state'),
                'items' => [
                    ['What type of real estate websites can you build?', 'We build websites for real estate agencies, brokers, builders, developers, realtors and property consultants.'],
                    ['Can you build property listings and search functionality?', 'Yes. We can build property listings with search and filters for location, property type, price and other requirements.'],
                    ['Can we manage multiple projects and property listings?', 'Yes. Your website can support multiple projects and listings, each with its own property details and information.'],
                    ['Can you integrate WhatsApp and CRM systems?', 'Yes. We can connect WhatsApp, CRM and lead-management tools to help your team manage property enquiries.'],
                    ['Can you help with SEO and digital marketing?', 'Yes. We offer SEO and digital marketing support to improve property visibility, website traffic and relevant enquiries.'],
                ],
            ],

            [
                'where' => $this->industry('healthcare-clinics'),
                'items' => [
                    ['What type of healthcare websites can you build?', 'We build websites for doctors, clinics, hospitals, diagnostic centres, dental practices, wellness businesses and healthcare providers.'],
                    ['Can you build doctor and specialist profile pages?', 'Yes. We can create doctor profiles with qualifications, experience, specialisations, services and other relevant information.'],
                    ['Can the website include appointment booking?', "Yes. Appointment requests or online booking can be added based on your clinic's workflow and requirements."],
                    ['Can you integrate WhatsApp and enquiry systems?', 'Yes. We can connect WhatsApp and enquiry forms so patients can easily reach your team.'],
                    ['Can we manage multiple doctors, departments and services?', 'Yes. Your website can support multiple doctors, departments, services and locations within one organised structure.'],
                    ['Can you help with SEO and digital marketing?', 'Yes. We offer SEO and digital marketing support to improve healthcare visibility and generate relevant patient enquiries.'],
                ],
            ],

            [
                'where' => $this->industry('NGO-Non-Profits'),
                'items' => [
                    ['What type of NGO websites can Web Mingo build?', 'We build websites for NGOs, charities, foundations, trusts, social impact organisations and community organisations.'],
                    ['Can you build donation functionality?', 'Yes. We can build donation pages and integrate suitable payment options for one-time or recurring contributions.'],
                    ['Can the website showcase programmes and projects?', 'Yes. Your programmes, projects and causes can have dedicated pages with relevant details and impact information.'],
                    ['Can we add volunteer registration and enquiry forms?', "Yes. We can create volunteer registration, enquiry and supporter forms based on your organisation's requirements."],
                    ['Can you integrate CRM or NGO management systems?', 'Yes. We can connect CRM, donor-management or NGO-management systems your organisation already uses.'],
                    ['Can you help with SEO and digital marketing?', 'Yes. We can support SEO and digital marketing to improve visibility and reach relevant supporters.'],
                ],
            ],

            [
                'where' => $this->industry('manufacturing-export'),
                'items' => [
                    ['What type of manufacturing websites can you build?', 'We build websites for manufacturers, exporters, industrial suppliers, OEM businesses, engineering companies and B2B businesses.'],
                    ['Can the website showcase our complete product catalogue?', 'Yes. Products can be organised by categories with specifications, applications, brochures and other relevant information.'],
                    ['Can buyers submit product enquiries or RFQs online?', 'Yes. Product enquiries, RFQ forms, bulk enquiries and other business enquiry workflows can be included.'],
                    ['Can we showcase our manufacturing facilities and capabilities?', 'Yes. Facilities, machinery, production capacity, processes, certifications and quality standards can be presented clearly.'],
                    ['Can you build websites for exporters and international markets?', 'Yes. Export markets, countries served, international enquiries and relevant business information can be included.'],
                    ['Can the website integrate with ERP, CRM or other business systems?', 'Yes. ERP, CRM and other required business integrations can be planned around your existing workflows.'],
                ],
            ],

            [
                'where' => $this->industry('hotels-hospitality'),
                'items' => [
                    ['What types of hotel and hospitality websites can you build?', 'We build websites for hotels, resorts, boutique hotels, homestays, serviced apartments, guest houses and other hospitality businesses.'],
                    ['Can we showcase our rooms and property properly?', 'Yes. Rooms, suites, images, amenities, facilities, pricing information and property details can be presented clearly.'],
                    ['Can guests make booking enquiries through the website?', 'Yes. Booking enquiries, reservation requests, contact forms, callbacks and WhatsApp enquiries can be integrated.'],
                    ['Can you integrate an online booking system?', 'Yes. An existing booking engine can be integrated, or a suitable booking experience can be planned for your property.'],
                    ['Can we showcase amenities, experiences and packages?', 'Yes. Dining, spa, wellness, activities, events, offers, packages and guest services can all be presented.'],
                    ['Can the website support multiple properties or room types?', 'Yes. Multiple properties, locations and room types can be organised into a structured digital experience.'],
                ],
            ],

            [
                'where' => $this->industry('travel-tourism'),
                'items' => [
                    ['What type of travel website can you build?', 'We build websites for travel agencies, tour operators, destination businesses, holiday planners and tourism brands.'],
                    ['Can I showcase destinations and travel packages?', 'Yes. Destinations, packages, experiences, itineraries, pricing and travel information can be presented clearly.'],
                    ['Can travellers enquire or request a booking?', 'Yes. Enquiry forms, booking requests, quote requests, callbacks and WhatsApp connections can be included.'],
                    ['Can you build customised travel package functionality?', 'Yes. Custom trip enquiries and request-a-quote functionality can be planned for personalised travel requirements.'],
                    ['Can you integrate CRM or booking systems?', 'CRM, booking, payment, analytics and required third-party integrations can be planned around your business needs.'],
                    ['Can I add new destinations and packages later?', 'Yes. Your website can be structured to add new destinations, packages and travel experiences as your business grows.'],
                ],
            ],

        ];
    }

    /** Home page + main FAQ page. */
    private function general(): array
    {
        return [
            'type'        => Faq::TYPE_GENERAL,
            'service'     => null,
            'sub_service' => null,
            'industry'    => null,
        ];
    }

    /** Main service page (sub = null) or sub service page. */
    private function service(string $service, ?string $sub = null): array
    {
        return [
            'type'        => Faq::TYPE_SERVICE,
            'service'     => $service,
            'sub_service' => $sub,
            'industry'    => null,
        ];
    }

    private function industry(string $industry): array
    {
        return [
            'type'        => Faq::TYPE_INDUSTRY,
            'service'     => null,
            'sub_service' => null,
            'industry'    => $industry,
        ];
    }
}