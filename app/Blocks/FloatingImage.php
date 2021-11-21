<?php

namespace App\Blocks;

use StoutLogic\AcfBuilder\FieldsBuilder;

class FloatingImage extends AbstractBlock
{
    public $name = 'Colonne image flottante';
    public $slug = 'floating-image';
    public $description = 'Affiche un bloc 40/60 avec une image flottante sur la gauche.';
    public $category = 'design';
    public $icon = 'table-col-before';

    public function with(): array
    {
        return [
            'image' => get_field('image'),
            'first_child' => get_field('first-child')
        ];
    }

    public function fields(): array
    {
        $item = new FieldsBuilder('floating_image');

        $item->addImage('image', [
            'required' => true,
            'return_format' => 'id'
        ]);

        $item->addTrueFalse('first-child', [
            'label' => 'Premier élément',
            'default' => false,
        ]);

        return $item->build();
    }
}
