<?php

namespace App\View\Composers;

use JetBrains\PhpStorm\ArrayShape;
use Roots\Acorn\View\Composer;

class ProjectItem extends Composer
{
    protected static $views = [
        'partials.content-portfolio',
    ];

    #[ArrayShape(['support' => "string"])]
    protected function with(): array
    {
        return [
            'support' => get_the_terms(get_the_ID(), 'support')[0]?->name ?? '',
        ];
    }
}
