<?php

namespace App\Blocks;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Quote extends AbstractBlock
{
    public $name = 'Témoignage';
    public $description = 'Bloc pleine page affichant un témoignage.';
    public $slug = 'quote';

    public function with(): array
    {
        return [
            'text' => get_field('text')
        ];
    }

    public function fields(): array
    {
        $fields = new FieldsBuilder($this->slug);

        $fields->addTextarea('text', [
            'label' => 'Contenu',
            'required' => true,
            'new_lines' => 'br',
        ]);

        return $fields->build();
    }
}
