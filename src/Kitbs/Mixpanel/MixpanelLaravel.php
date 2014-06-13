<?php namespace Kitbs\Mixpanel;

use Config;
use Mixpanel;

class MixpanelLaravel {

    private $mixpanel;

    public function __construct()
    {
        $this->getInstance();
    }

    public function getInstance($token = false, $options = array())
    {

        if (!$token) { $token = Config::get('mixpanel::token'); }

        $options = array_merge(Config::get('mixpanel::options'), $options);

        $options = array_filter($options, function($option) { return !is_null($option); });

        return $this->mixpanel = new Mixpanel($token, $options);

    }

    public function __call($method, $args)
    {
        return call_user_func_array(array(&$this->mixpanel, $method), $args);

    }

    public function people()
    {
        return $this->mixpanel->people;
    }

    public function instance()
    {
        return $this->mixpanel;
    }

}