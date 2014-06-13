<?php namespace Kitbs\Mixpanel\Facades;

use Illuminate\Support\Facades\Facade;

class MixpanelFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'mixpanel'; }

}