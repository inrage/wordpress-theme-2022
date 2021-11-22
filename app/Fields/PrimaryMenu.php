<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PrimaryMenu extends Field
{
    public function fields(): array
    {
        $primaryMenu = new FieldsBuilder('primary_menu');

        $primaryMenu
            ->setLocation('nav_menu_item', '==', 'location/primary_navigation');

        $primaryMenu
            ->addImage('image', [
                'label' => 'Image',
                'return_format' => 'id'
            ]);

        return $primaryMenu->build();
    }
}
