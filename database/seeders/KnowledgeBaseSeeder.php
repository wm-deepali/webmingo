<?php

namespace Database\Seeders;

use App\Models\KnowledgeBaseArticle;
use App\Models\KnowledgeBaseCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KnowledgeBaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'websites'            => 'Websites',
            'ecommerce'           => 'E-Commerce',
            'seo'                 => 'SEO',
            'web-applications'    => 'Web Applications',
            'digital-marketing'   => 'Digital Marketing',
            'security'            => 'Security',
            'hosting-maintenance' => 'Hosting & Maintenance',
        ];

        $categoryIds = [];
        $order = 1;

        foreach ($categories as $slug => $name) {
            $category = KnowledgeBaseCategory::updateOrCreate(
                ['slug' => $slug],
                ['name' => $name, 'sort_order' => $order++, 'status' => 1]
            );
            $categoryIds[$slug] = $category->id;
        }

        $sortByCategory = [];

        foreach ($this->articles() as $item) {
            $slug = Str::slug($item['title']);
            $sortByCategory[$item['category']] = ($sortByCategory[$item['category']] ?? 0) + 1;

            KnowledgeBaseArticle::updateOrCreate(
                ['slug' => $slug],
                [
                    'category_id'       => $categoryIds[$item['category']],
                    'title'             => $item['title'],
                    'short_description' => $item['desc'],
                    'content'           => $this->html($item['sections']),
                    'cta_text'          => $item['cta'] ?? null,
                    'cta_button_text'   => 'Talk To Us',
                    'sort_order'        => $sortByCategory[$item['category']],
                    'status'            => 1,
                ]
            );
        }
    }

    private function html(array $sections): string
    {
        $html = '';

        foreach ($sections as $section) {
            $html .= '<h5>' . e($section['h']) . '</h5>';

            if (isset($section['p'])) {
                $html .= '<p>' . e($section['p']) . '</p>';
            }

            if (isset($section['ul'])) {
                $html .= '<ul>';
                foreach ($section['ul'] as $li) {
                    $html .= '<li>' . e($li) . '</li>';
                }
                $html .= '</ul>';
            }
        }

        return $html;
    }

    private function articles(): array
    {
        return [

            // ---------------- WEBSITES ----------------
            [
                'category' => 'websites',
                'title'    => 'Why Is My Website Getting Visitors But No Enquiries?',
                'desc'     => "Getting visitors to your website is only the first step. If people are landing on your pages but leaving without calling, messaging or submitting an enquiry, the problem may be with your website experience rather than your traffic. This guide explains the common reasons visitors do not take the next step and what you can improve.",
                'cta'      => "Need help improving your website's enquiry journey?",
                'sections' => [
                    ['h' => 'The Problem', 'p' => "Your website may be receiving visitors from Google, social media, advertisements or referrals, but those visitors are not converting into enquiries. Traffic alone does not guarantee business results."],
                    ['h' => 'Why It Happens', 'ul' => [
                        "Your main message is not immediately clear.",
                        "Visitors cannot quickly understand your services.",
                        "Contact or enquiry options are difficult to find.",
                        "There is not enough trust-building information.",
                        "The website does not guide visitors towards one clear action.",
                    ]],
                    ['h' => 'What You Can Do', 'p' => "Review your homepage from a customer's perspective. Make your main service clear, explain the value you provide, show relevant proof such as work or testimonials, and place clear enquiry options throughout the journey."],
                ],
            ],
            [
                'category' => 'websites',
                'title'    => 'Does My Business Still Need A Website If I Have Social Media?',
                'desc'     => "Social media can help businesses reach people, but it does not replace having a digital home of your own. Your website gives customers one reliable place to understand your business, services, credibility and contact options without depending entirely on a third-party platform.",
                'cta'      => "Want to build a website around your business goals?",
                'sections' => [
                    ['h' => 'Why Social Media Is Not Enough', 'p' => "Social platforms are useful for discovery and engagement, but your business has limited control over how your information is presented. Algorithms, profiles and platform changes can also affect how customers find you."],
                    ['h' => 'What Your Website Adds', 'ul' => [
                        "A professional home for your business.",
                        "Complete control over your content and structure.",
                        "Detailed service and product information.",
                        "Better opportunities for Google search visibility.",
                        "Direct enquiry, booking and conversion journeys.",
                    ]],
                    ['h' => 'What You Can Do', 'p' => "Use social media to attract attention and your website to provide the complete business experience. Connect both channels so customers can move naturally from discovery to learning more and making an enquiry."],
                ],
            ],
            [
                'category' => 'websites',
                'title'    => 'Why Is My Website Loading Slowly?',
                'desc'     => "A slow website can make it harder for visitors to browse, understand your services and complete important actions. Loading problems can come from large images, unnecessary scripts, poor hosting, inefficient code or third-party integrations. This guide covers the main areas worth checking.",
                'cta'      => "Need help diagnosing a slow website?",
                'sections' => [
                    ['h' => 'Common Causes', 'ul' => [
                        "Images are larger than they need to be.",
                        "Too many scripts or plugins are loaded.",
                        "Hosting resources are not suitable for the website.",
                        "Third-party services are slowing down page loading.",
                        "Website code has not been properly optimised.",
                    ]],
                    ['h' => 'What You Can Do', 'p' => "Compress and properly size images, remove unnecessary scripts, review third-party integrations and make sure your hosting environment matches your website's needs. A proper performance audit can identify the exact bottleneck instead of relying on assumptions."],
                    ['h' => 'When To Get Professional Help', 'p' => "If basic image and plugin optimisation does not improve the experience, the issue may involve server response, code structure, database queries or more complex integrations."],
                ],
            ],
            [
                'category' => 'websites',
                'title'    => 'Should I Redesign My Website Or Build A New One?',
                'desc'     => "Not every outdated website needs to be rebuilt from scratch. In some cases, improving the existing structure is enough, while older websites may have technical or architectural limitations that make a new build more practical. The right decision depends on your current website and future goals.",
                'cta'      => null,
                'sections' => [
                    ['h' => 'A Redesign May Be Enough When', 'ul' => [
                        "The existing technology is still suitable.",
                        "The content and structure can be improved.",
                        "The website can support the required functionality.",
                        "The current backend is stable and maintainable.",
                    ]],
                    ['h' => 'A New Website May Make More Sense When', 'ul' => [
                        "The existing technology is outdated.",
                        "The website has major performance problems.",
                        "The structure is difficult to maintain.",
                        "New functionality requires a different architecture.",
                        "The business has significantly changed direction.",
                    ]],
                    ['h' => 'What You Should Review', 'p' => "Look at your current technology, performance, content, user journey, integrations and future requirements before deciding. A visual redesign alone will not solve deeper technical limitations."],
                ],
            ],

            // ---------------- E-COMMERCE ----------------
            [
                'category' => 'ecommerce',
                'title'    => 'What Should A Modern E-Commerce Website Include?',
                'desc'     => "A modern online store needs more than product images and a checkout button. Customers need clear product information, easy navigation, trust signals, convenient payment options and a smooth buying journey across devices. This guide covers the important areas to consider when planning an e-commerce website.",
                'cta'      => "Planning an online store?",
                'sections' => [
                    ['h' => 'Important Store Features', 'ul' => [
                        "Clear product categories and navigation.",
                        "Detailed product pages with useful information.",
                        "Mobile-friendly shopping experience.",
                        "Secure checkout and payment integration.",
                        "Order and customer management.",
                        "Search, filtering and useful product discovery.",
                    ]],
                    ['h' => 'Do Not Forget The Buying Experience', 'p' => "Customers should be able to move from discovering a product to understanding it, adding it to their cart and completing payment without unnecessary friction. Shipping, returns and support information should also be easy to find."],
                ],
            ],

            // ---------------- SEO ----------------
            [
                'category' => 'seo',
                'title'    => 'Why Is My Website Not Showing On Google?',
                'desc'     => "Having a website does not automatically mean every page will appear prominently in Google. Search visibility depends on technical setup, content quality, relevance, authority and how well search engines can understand your website. This guide explains the areas you should check first.",
                'cta'      => "Want to understand what is limiting your website's SEO?",
                'sections' => [
                    ['h' => 'Check The Basics', 'ul' => [
                        "Make sure the website can be crawled by search engines.",
                        "Check whether important pages are indexed.",
                        "Review page titles and descriptions.",
                        "Make sure pages target clear search intent.",
                        "Check technical errors and broken links.",
                    ]],
                    ['h' => 'Why It Can Take Time', 'p' => "Search visibility is influenced by many factors and usually requires consistent optimisation. A newly launched website may also need time to be discovered, crawled and evaluated."],
                    ['h' => 'What You Can Do', 'p' => "Start with technical SEO, useful page content, search-focused service pages and a clear internal linking structure. Monitor performance regularly rather than making random changes based only on rankings."],
                ],
            ],
            [
                'category' => 'seo',
                'title'    => 'How Long Does SEO Take To Show Results?',
                'desc'     => "SEO is usually a gradual process rather than an instant marketing switch. Results depend on your website's current condition, competition, search demand, content quality and the work being performed. Understanding these factors helps set realistic expectations for an SEO campaign.",
                'cta'      => null,
                'sections' => [
                    ['h' => 'What Influences SEO Progress?', 'ul' => [
                        "Current website quality and technical health.",
                        "Competition for your target searches.",
                        "Quality and relevance of your content.",
                        "Website authority and credibility.",
                        "Consistency of optimisation work.",
                    ]],
                    ['h' => 'What You Should Measure', 'p' => "Do not look only at one keyword position. Review impressions, relevant organic traffic, indexed pages, enquiries and other meaningful business outcomes over time."],
                ],
            ],

            // ---------------- WEB APPLICATIONS ----------------
            [
                'category' => 'web-applications',
                'title'    => 'Do I Need A CRM For My Business Website?',
                'desc'     => "A CRM can become useful when a business receives regular enquiries and needs a better way to organise leads, follow conversations and manage customer information. But not every business needs a complex CRM from day one. The right choice depends on your sales process and operational requirements.",
                'cta'      => null,
                'sections' => [
                    ['h' => 'A CRM Can Help When', 'ul' => [
                        "Your business receives many enquiries.",
                        "Multiple people handle leads.",
                        "Follow-ups are currently managed manually.",
                        "You need customer history in one place.",
                        "You want visibility into your sales pipeline.",
                    ]],
                    ['h' => 'Start With Your Process', 'p' => "Before selecting a CRM, map how a lead enters your business, who handles it, what information is required, how follow-ups happen and when a lead becomes a customer. Your system should support that process rather than add unnecessary complexity."],
                ],
            ],

            // ---------------- DIGITAL MARKETING ----------------
            [
                'category' => 'digital-marketing',
                'title'    => 'Why Are My Digital Marketing Leads Not Converting?',
                'desc'     => "Generating leads is only one part of digital marketing. If enquiries are coming in but very few become customers, the problem may be the offer, landing page, response time, qualification process or follow-up journey. This guide helps you identify where leads may be dropping off.",
                'cta'      => null,
                'sections' => [
                    ['h' => 'Check The Complete Journey', 'ul' => [
                        "Is the advertisement reaching the right audience?",
                        "Does the landing page match the campaign?",
                        "Is the offer clear?",
                        "How quickly are enquiries being answered?",
                        "Is there a consistent follow-up process?",
                    ]],
                    ['h' => 'Improve One Stage At A Time', 'p' => "Track the journey from campaign click to enquiry and then from enquiry to customer. This makes it easier to identify whether the issue is attracting the wrong audience, losing visitors on the website or failing to follow up effectively."],
                ],
            ],

            // ---------------- SECURITY ----------------
            [
                'category' => 'security',
                'title'    => 'How Can I Protect My Website From Security Problems?',
                'desc'     => "Website security is not only about what happens after a site is attacked. Regular updates, strong access controls, secure hosting, backups and monitoring can reduce common risks. This guide explains the practical security measures every business website should consider.",
                'cta'      => null,
                'sections' => [
                    ['h' => 'Basic Security Measures', 'ul' => [
                        "Keep website software and dependencies updated.",
                        "Use strong and unique administrator credentials.",
                        "Limit access to people who actually need it.",
                        "Maintain reliable backups.",
                        "Use HTTPS and secure hosting.",
                        "Monitor the website for unusual activity.",
                    ]],
                    ['h' => 'Do Not Ignore Maintenance', 'p' => "Security is an ongoing responsibility. A website that was secure when launched can become vulnerable later if software, plugins, integrations or server components are left outdated."],
                ],
            ],

            // ---------------- HOSTING & MAINTENANCE ----------------
            [
                'category' => 'hosting-maintenance',
                'title'    => 'How Often Should I Update My Website?',
                'desc'     => "Website maintenance is not only about changing text and images. A healthy website needs regular technical checks, software updates, backups, security reviews and content improvements. The right maintenance schedule depends on the technology and complexity of your website.",
                'cta'      => null,
                'sections' => [
                    ['h' => 'Regular Checks Should Include', 'ul' => [
                        "Website backups.",
                        "Security updates.",
                        "Broken-link checks.",
                        "Form and enquiry testing.",
                        "Performance monitoring.",
                        "Content and image updates.",
                    ]],
                    ['h' => 'Why Maintenance Matters', 'p' => "Small technical issues can become bigger problems when they are ignored. Regular maintenance helps keep the website secure, functional and aligned with your current business requirements."],
                ],
            ],
        ];
    }
}