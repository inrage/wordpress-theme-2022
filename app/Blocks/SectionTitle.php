<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Roots\asset;

class SectionTitle extends AbstractBlock
{
    public $name = 'Section Title';
    public $slug = 'section-title';
    public $description = 'Une section avec un titre H2 séparé par un slash et un contenu paragraphe';
    public $category = 'theme';
    public $icon = 'heading';

    public $example = [
        'title' => 'Section Title',
        'content' => 'Lorem Ipsum',
    ];

    public function with(): array
    {
        return [
            'title' => get_field('title'),
            'content' => get_field('content'),
        ];
    }

    public function fields(): array
    {
        $sectionTitle = new FieldsBuilder('section_title');

        $sectionTitle
            ->addText('title', [
                'label' => 'Titre de la section'
            ])
            ->addTextarea('content', [
                'label' => 'Contenu de la section',
                'new_lines' => 'br',
                'rows' => 3
            ]);

        return $sectionTitle->build();
    }
}
