<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Roots\asset;

class ReinsuranceItem extends AbstractBlock
{
    public $name = 'Réassurance';
    public $slug = 'reinsurance-item';
    public $description = 'Affiche une icône de réassurance';
    public $category = 'design';
    public $icon = 'heart';

    public $example = [
        'icon' => 'coffee',
        'number' => 1,
        'title' => 'Reinsurance Title'
    ];

    public function with(): array
    {
        return [
            'icon' => get_svg('svg/' . get_field('icon')),
            'number' => get_field('number') ?: $this->example['number'],
            'title' => get_field('title') ?: $this->example['title'],
        ];
    }

    public function fields(): array
    {
        $item = new FieldsBuilder('reinsurance_item');

        $item->addChoiceField('icon', 'select', [
            'label' => 'Icône',
            'choices' => [
                'icon-coffee' => 'Tasse à café'
            ],
            'return_format' => 'value',
        ]);

        $item->addText('number', [
            'label' => 'Nombre',
            'required' => true,
        ]);

        $item->addText('title', [
            'label' => 'Titre',
            'required' => true,
        ]);

        return $item->build();
    }
}
