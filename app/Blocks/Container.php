<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;
use function Roots\asset;

class Container extends Block
{
    public $name = 'Container (1200px)';
    public $slug = 'container';
    public $description = "Création d'un container qui utilise le max-width du site et centre ses enfants";
    public $category = 'theme';
    public $icon = 'align-center';
    public $mode = 'preview';

    public function with()
    {
        return [];
    }

    public function fields()
    {
        return [];
    }
}
