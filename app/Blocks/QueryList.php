<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

use function Roots\asset;
use function Roots\bundle;

class QueryList extends AbstractBlock
{
    public $name = 'Requète de contenu';
    public $slug = 'query-list';
    public $description = 'Utilise une WP_Query et affiche son contenu en prenant le style';
    public $category = 'content';
    public $icon = 'grid-view';

    private const ALLOWED_POST_TYPES = [
        'portfolio' => ['style' => 'project-item', 'label' => 'Projet'],
        'post' => ['style' => 'article-item', 'label' => 'Article'],
    ];

    public $example = [
        'posts_per_page' => 2,
        'post_type' => 'post'
    ];

    public function with(): array
    {
        $postTypeStyle = self::ALLOWED_POST_TYPES[get_field('post_type')]['style'];

        if (asset($postTypeStyle . '.css')->exists()) {
            bundle($postTypeStyle)->enqueue();
        }

        return [
            'query_list' => $this->getProjects(),
            'posts_per_page' => get_field('posts_per_page') ?: $this->example['posts_per_page'],
        ];
    }

    public function fields(): array
    {
        $listPortfolio = new FieldsBuilder('list_portfolio');

        $listPortfolio->addRange('posts_per_page', [
            'label' => 'Nombre de projets',
            'min' => 1,
            'max' => 8,
            'step' => 1
        ]);

        $listPortfolio->addChoiceField('post_type', 'select', [
            'label' => 'Type de contenu',
            'required' => true,
            'choices' => array_map(fn($postType) => $postType['label'], self::ALLOWED_POST_TYPES),
            'default_value' => 'post'
        ]);

        return $listPortfolio->build();
    }

    private function getProjects(): \WP_Query
    {
        $args = [
            'post_type' => get_field('post_type'),
            'posts_per_page' => get_field('posts_per_page'),
        ];

        return new \WP_Query($args);
    }
}
