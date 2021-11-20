<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Roots\asset;

class ShowAll extends Block
{
    public $name = 'Show All';
    public $description = 'A simple Show All block.';
    public $category = 'formatting';
    public $icon = 'editor-ul';
    public $keywords = [];
    public $post_types = [];
    public $parent = [];
    public $mode = 'preview';
    public $align = '';
    public $align_text = '';
    public $align_content = '';
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    public $example = [
        'label' => 'Show all',
    ];

    public function with(): array
    {
        return [
            'label' => get_field('label') ?? $this->example['label'],
            'bg_outer' => get_field('bg_outer') ?? 'dark',
            'bg_push' => get_field('bg_push') ?? 'darker',
            'show_link' => get_field('show_link') ?? true,
        ];
    }

    public function fields(): array
    {
        $showAll = new FieldsBuilder('show_all');

        $showAll->addTrueFalse('show_link', [
            'label' => 'Afficher le lien',
            'ui' => true,
            'default_value' => true,
        ]);

        $showAll->addTextarea('label', [
            'label' => 'Titre lien',
            'rows' => 2,
            'new_lines' => 'br',
            'conditional_logic' => [
                [
                    [
                        'field' => 'show_link',
                        'operator' => '==',
                        'value' => '1',
                    ],
                ],
            ],
        ]);

        $showAll->addSelect('bg_outer', [
            'choices' => [
                'dark' => 'Dark',
                'darker' => 'Darker',
            ],
        ]);

        $showAll->addSelect('bg_push', [
            'choices' => [
                'dark' => 'Dark',
                'darker' => 'Darker',
                'orange' => 'Orange'
            ],
        ]);

        return $showAll->build();
    }

    public function enqueue(): void
    {
        wp_enqueue_style('blocks/show-all.css', asset('styles/blocks/show-all.css')->uri(), false, null);
    }
}
