<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Project extends Field
{
    public function fields(): array
    {
        $item = new FieldsBuilder('project', [
            'title' => "Configuration du projet"
        ]);

        $item->setLocation('post_type', '==', 'portfolio');

        $item->addNumber('year', [
            'required' => true,
            'label' => 'Année de production',
            'min' => 2015,
            'max' => date('Y'),
            'default_value' => date('Y')
        ]);

        $item->addTextarea('excerpt', [
            'required' => true,
            'instructions' => "Résumé dans l'ensemble le projet, sa nature et sa fonction principale",
            'label' => 'Description',
            'new_lines' => 'br',
            'rows' => 3
        ]);

        $item->addUrl('url', [
            'label' => 'Lien vers le site',
            'default_value' => 'https://',
            'instructions' => 'Lien vers le site du projet sans mettre de "/" à la fin',
        ]);

        $item->addTextarea('missions', [
            'label' => 'Missions',
            'instructions' => 'Missions effectuées au sein du projet',
            'new_lines' => 'br',
            'rows' => 5
        ]);

        return $item->build();
    }
}
