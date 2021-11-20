<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Roots\asset;

class OfferItem extends AbstractBlock
{
    public $name = 'Service (offre)';
    public $slug = 'offer-item';
    public $description = "Bloc qui affiche un service de catégorie n1 (développment, hébergement, ...)";
    public $category = 'content';
    public $icon = 'art';

    public $example = [
        'title' => 'Section Title',
        'content' => 'Lorem Ipsum',
        'link' => [
            'url' => '#',
            'title' => 'Découvrir'
        ]
    ];

    public function with(): array
    {
        return [
            'icon' => get_field('icon')
                ? wp_get_attachment_image(get_field('icon'), 'full')
                : $this->sampleImageSrc('images/placeholders/offer-item.png'),
            'title' => get_field('title'),
            'content' => get_field('content'),
            'link' => get_field('link'),
        ];
    }

    public function fields(): array
    {
        $sectionTitle = new FieldsBuilder('offer_item');

        $sectionTitle
            ->addImage('icon', ['return_format' => 'id'])->setRequired()
            ->addTextarea('title', ['new_lines' => 'br', 'rows' => 2])->setRequired()
            ->addTextarea('content', ['new_lines' => 'br', 'rows' => 5])
            ->addLink('link');

        return $sectionTitle->build();
    }
}
