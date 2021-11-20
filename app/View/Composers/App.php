<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use function Roots\asset;

class App extends Composer
{
    protected static $views = [
        '*',
    ];

    public function with(): array
    {
        if(has_shortcode(get_the_content(), 'contact-form-7')) {
            wp_enqueue_style('blocks/contact-form.css', asset('styles/blocks/contact-form.css')->uri(), false, null);

            if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
                wpcf7_enqueue_scripts();
            }
        }

        return [
            'siteName' => $this->siteName(),
        ];
    }

    public function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }
}
