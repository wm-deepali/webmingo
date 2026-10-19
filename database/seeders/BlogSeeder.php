<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title'             => 'How Better Design Creates Better Digital Experiences',
                'category'          => 'Design',
                'published_at'      => '2026-09-08',
                'image'             => 'https://images.unsplash.com/photo-1559028012-481c04fa702d?auto=format&fit=crop&w=900&q=85',
                'image_alt'         => 'Designer working on a digital interface',
                'short_description' => 'A closer look at how thoughtful design can make digital experiences clearer, easier, and more engaging.',
                'sections'          => [
                    'Clarity comes first' => 'Good design removes friction. When visitors instantly understand where they are and what to do next, they stay longer and convert more often.',
                    'Consistency builds trust' => 'Consistent typography, spacing and interaction patterns make a website feel reliable and professional across every page and device.',
                    'Design for real users' => 'The best interfaces are shaped by real behaviour, not assumptions. Testing and iteration keep the experience aligned with what people actually need.',
                ],
                'show_home'         => true,
            ],
            [
                'title'             => 'What Makes a Website Fast, Flexible, and Future Ready?',
                'category'          => 'Development',
                'published_at'      => '2026-09-04',
                'image'             => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=900&q=85',
                'image_alt'         => 'Developer working with code on a computer',
                'short_description' => 'From performance to scalability, discover the foundations of a website built to grow with your business.',
                'sections'          => [
                    'Performance matters' => 'Optimised images, efficient queries and sensible caching keep pages loading quickly, which helps both users and search visibility.',
                    'Build for change' => 'A clean structure and modular code make it easier to add new features without rebuilding what already works.',
                    'Plan for growth' => 'Scalable hosting and a flexible architecture let your website handle more traffic and more content as your business grows.',
                ],
                'show_home'         => true,
            ],
            [
                'title'             => 'Why Digital Strategy Should Come Before Design',
                'category'          => 'Strategy',
                'published_at'      => '2026-08-30',
                'image'             => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=85',
                'image_alt'         => 'Creative team discussing a digital strategy',
                'short_description' => 'Great digital work starts by understanding the problem, the audience, and the opportunity before opening the design file.',
                'sections'          => [
                    'Start with the problem' => 'Before choosing colours or layouts, define what the website needs to achieve and who it is for.',
                    'Know your audience' => 'Understanding user needs and expectations shapes the structure, content and features that matter most.',
                    'Design with purpose' => 'When strategy leads, every design decision has a reason, and the result supports real business goals.',
                ],
                'show_home'         => true,
            ],
            [
                'title'             => 'Building a Brand That Works Beyond the Logo',
                'category'          => 'Branding',
                'published_at'      => '2026-08-26',
                'image'             => 'https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=900&q=85',
                'image_alt'         => 'Brand identity design materials on a desk',
                'short_description' => 'A strong brand is more than a visual identity. It is the experience people remember at every digital touchpoint.',
                'sections'          => [
                    'More than visuals' => 'A brand is the sum of its voice, visuals, service and experience, not just a logo.',
                    'Be consistent everywhere' => 'From your website to social media and emails, a consistent presence helps people recognise and remember you.',
                    'Let the website carry the brand' => 'Your website is often the first real interaction. Its tone, speed and usability say a lot about your business.',
                ],
                'show_home'         => false,
            ],
            [
                'title'             => 'Turning Digital Traffic Into Meaningful Growth',
                'category'          => 'Marketing',
                'published_at'      => '2026-08-22',
                'image'             => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=85',
                'image_alt'         => 'Analytics dashboard showing digital growth data',
                'short_description' => 'Traffic is only the beginning. Learn how better digital experiences can help turn attention into real opportunities.',
                'sections'          => [
                    'Traffic is not the goal' => 'Visitors only matter when they take action. Focus on what you want them to do after they arrive.',
                    'Make the next step obvious' => 'Clear calls to action, simple forms and focused pages reduce drop-off and increase enquiries.',
                    'Measure and improve' => 'Analytics show where people stay and where they leave, so you can keep improving what works.',
                ],
                'show_home'         => false,
            ],
            [
                'title'             => 'How Technology Is Changing the Way Businesses Build Online',
                'category'          => 'Technology',
                'published_at'      => '2026-08-18',
                'image'             => 'https://images.unsplash.com/photo-1484417894907-623942c8ee29?auto=format&fit=crop&w=900&q=85',
                'image_alt'         => 'Modern workspace with technology and laptop',
                'short_description' => 'New technologies are creating new possibilities for businesses, teams, and the digital experiences they create.',
                'sections'          => [
                    'Faster ways to build' => 'Modern frameworks and tools let teams deliver websites and applications more efficiently than before.',
                    'Smarter automation' => 'Automation and integrations reduce manual work and connect the tools your business already uses.',
                    'Choose what fits' => 'Not every new technology is right for every project. The best choice is the one that fits your goals and budget.',
                ],
                'show_home'         => false,
            ],
        ];

        foreach ($blogs as $b) {
            $slug = \Illuminate\Support\Str::slug($b['title']);

            Blog::updateOrCreate(
                ['slug' => $slug],
                [
                    'title'             => $b['title'],
                    'category'          => $b['category'],
                    'published_at'      => $b['published_at'],
                    'short_description' => $b['short_description'],
                    'content'           => $this->buildContent($b['short_description'], $b['sections']),
                    'image'             => $b['image'],
                    'image_alt'         => $b['image_alt'],
                    'meta_title'        => $b['title'] . ' | Web Mingo',
                    'meta_description'  => $b['short_description'],
                    'status'            => 1,
                    'show_home'         => $b['show_home'] ? 1 : 0,
                ]
            );
        }
    }

    private function buildContent(string $intro, array $sections): string
    {
        $html = "<p>{$intro}</p>";

        foreach ($sections as $heading => $text) {
            $html .= "<h3>{$heading}</h3><p>{$text}</p>";
        }

        return $html;
    }
}