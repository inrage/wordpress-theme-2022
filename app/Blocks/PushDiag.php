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
            ->addChoiceField('top_outer_bg', 'select', [
                'choices' => [
                    'darker' => 'Darker',
                    'dark' => 'Dark',
                ]
            ])->setLabel('BG Top')
            ->addChoiceField('bottom_outer_bg', 'select', [
                'choices' => [
                    'darker' => 'Darker',
                    'dark' => 'Dark',
                ]
            ])->setLabel('BG Bottom');

        return $pushDiag->build();
    }
}
