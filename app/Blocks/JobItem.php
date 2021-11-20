<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Roots\asset;

class JobItem extends AbstractBlock
{
    public $name = 'Expérience professionnelle';
    public $description = "Bloc horizontal pour montrer une expérience au sein d'une entreprise en tant que salarié";
    public $slug = 'job-item';
    public $category = 'content';
    public $icon = 'businessman';

    public $example = [
        'title' => 'Développeur Freelance',
        'company' => 'inRage',
        'duration' => '2000 - 10 ans',
        'description' => 'Lorem Ipsum',
    ];

    public function with()
    {
        return [
            'logo' => get_field('logo')
                ? wp_get_attachment_image(get_field('logo'), 'full')
                : $this->sampleImageSrc('images/placeholders/job-item.png'),
            'title' => get_field('title') ?: $this->example['title'],
            'company' => get_field('company') ?: $this->example['company'],
            'duration' => get_field('duration') ?: $this->example['duration'],
            'description' => get_field('description') ?: $this->example['description'],
        ];
    }

    public function fields()
    {
        $field = new FieldsBuilder('job_item');

        $field->addImage('logo', [
            'label' => 'Logo de la société',
            'return_format' => 'id',
            'required' => true,
        ]);

        $field->addText('title', [
            'label' => 'Fonction dans la société',
            'required' => true,
        ]);

        $field->addText('company', [
            'label' => 'Société, localisation',
            'required' => true,
        ]);

        $field->addText('duration', [
            'label' => 'Année - Durée',
            'required' => true,
        ]);

        $field->addTextarea('description', [
            'label' => 'Description',
            'required' => true,
            'new_lines' => 'br',
            'rows' => 2
        ]);

        return $field;
    }
}
