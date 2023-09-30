<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class StringVault extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'String Vault';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'String Vault | Options';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $stringVault = new FieldsBuilder('string_vault');

        $stringVault
            ->addTab('views')
            ->addTab('partials')
                ->addText('item')
            ->addTab('components')
            ->addTab('forms')
            ->addTab('blocks')
            ->addTab('woocommerce')
            ->addTab('layouts')
        ;
        return $stringVault->build();
    }
}
