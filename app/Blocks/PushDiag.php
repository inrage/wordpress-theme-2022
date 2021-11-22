<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Roots\asset;

class PushDiag extends AbstractBlock
{
    public $name = 'SVG Diagonal';
    public $slug = 'push-diag';
    public $description = "Permet de splitter le contenu avec un SVG en diagonal";
    public $category = 'theme';
    public $icon = 'editor-insertmore';

    public function with(): array
    {
        return [
            'bg_top_outer' => get_field('top_outer_bg'),
            'bg_bottom_outer' => get_field('bottom_outer_bg'),
            'push_color' => get_field('push_color'),
            'bg_img' => get_field('bg_img') ? wp_get_attachment_image_url(get_field('bg_img'), 'full') : null,
        ];
    }

    public function fields(): array
    {
        $pushDiag = new FieldsBuilder('push_diag');

        $pushDiag
            ->addImage('bg_img', [
                'label' => 'Image de fond',
                'return_format' => 'id'
            ])
            ->addSelect('push_color', [
                'label' => 'Couleur des pushs',
                'choices' => [
                    'darker' => 'Darker',
                    'dark' => 'Dark',
                    'orange' => 'Orange'
                ],
                'default' => 'orange'
            ])
            ->addChoiceField('top_outer_bg', 'select', [
                'label' => 'BG Top',
                'choices' => [
                    'darker' => 'Darker',
                    'dark' => 'Dark',
                ],
                'default' => 'dark'
            ])
            ->addChoiceField('bottom_outer_bg', 'select', [
                'label' => 'BG Bottom',
                'choices' => [
                    'darker' => 'Darker',
                    'dark' => 'Dark',
                ],
                'default' => 'dark'
            ]);

        return $pushDiag->build();
    }
}
