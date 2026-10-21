<?php

/*
|--------------------------------------------------------------------------
| Pages whose hero section can be edited from the admin
|--------------------------------------------------------------------------
| Key = Laravel route name of the page.
|
| Service pages (main + sub) and industry pages are NOT repeated here:
| they are read from config/faq_pages.php, which already lists them
| with the same route-name keys.
|
| Blog detail and career detail pages are not listed because their hero
| comes from the blog post / job opening itself.
*/

return [

    'general' => [
        'home'           => 'Home',
        'about'          => 'About Us',
        'lifeAt'         => 'Life at Web Mingo',
        'our-works'      => 'Our Works',
        'Knowledge-base' => 'Knowledge Base',
        'faqs'           => 'FAQ',
        'blog'           => 'Blogs',
        'career'         => 'Careers',
        'contact'        => 'Contact',
    ],

];