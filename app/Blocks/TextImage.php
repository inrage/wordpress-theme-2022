<?php

namespace App\Blocks;

use StoutLogic\AcfBuilder\FieldsBuilder;

class TextImage extends AbstractBlock
{
    public $name = 'Texte / Image';
    public $description = "Bloc avec un image (40%) et du contenu (60%).";
    public $slug = 'text-image';

    public $example = [
        'image_position' => 'left'
    ];

    public function with(): array
    {
        return [
            'image_position' => get_field('image_position'),
            'image' => get_field('image'),
        ];
    }

    public function fields(): array
    {
        $fields = new FieldsBuilder($this->slug);

        $fields->addImage('image', [
            'label' => 'Image',
            'required' => true,
            'return_format' => 'id'
        ]);

        $fields->addButtonGroup('image_position', [
            'label' => 'Position de l\'image',
            'required' => true,
            'choices' => [
                'left' => 'Gauche',
                'right' => 'Droite',
            ],
            'default_value' => 'left',
        ]);

        return $fields->build();
    }
}
