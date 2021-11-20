<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Roots\asset;

class ExpertiseItem extends AbstractBlock
{
    public $name = 'Expertise';
    public $slug = 'expertise-item';
    public $description = "Affiche un bloc d'expertise en horizontal (WordPress, Joomla, Symfony, ...)";
    public $category = 'content';
    public $icon = 'welcome-learn-more';

    public $example = [
        'title' => 'Expertise Item Title',
        'excerpt' => 'Lorem ipsum dolor sit amet',
        'link' => ['url' => '#', 'title' => 'En savoir plus'],
    ];

    public function with(): array
    {
        return [
            'logo' => get_field('logo')
                ? wp_get_attachment_image(get_field('logo'), 'expertise-item')
                : $this->sampleImageSrc('images/placeholders/expertise-item.png'),
            'title' => get_field('title'),
            'excerpt' => get_field('excerpt'),
            'link' => get_field('link'),
        ];
    }

    public function fields(): array
    {
        $expertiseItem = new FieldsBuilder('expertise_item');

        $expertiseItem->addImage('logo', [
            'label' => 'Logo',
            'return_format' => 'id',
            'required' => true,
            'preview_size' => 'expertise-item'
        ]);

        $expertiseItem->addText('title', [
            'label' => "Titre de l'expertise",
            'required' => true,
            'default_value' => $this->example['title']
        ]);

        $expertiseItem->addTextarea('excerpt', [
            'label' => "Résumé de l'expertise",
            'default_value' => $this->example['excerpt']
        ]);

        $expertiseItem->addLink('link', [
            'label' => 'Lien',
            'required' => false,
        ]);

        return $expertiseItem->build();
    }
}
