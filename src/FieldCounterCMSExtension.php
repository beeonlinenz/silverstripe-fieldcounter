<?php

namespace PlatoCreative\FieldCounter;

use SilverStripe\Admin\LeftAndMainExtension;
use SilverStripe\Forms\TextField;
use SilverStripe\View\Requirements;

class FieldCounterCMSExtension extends LeftAndMainExtension
{

    public function init()
    {
        parent::init();

        Requirements::css('plato-creative/silverstripe-fieldcounter: css/counter.css');
        Requirements::javascript('plato-creative/silverstripe-fieldcounter: javascript/counter.js');
    }
}
