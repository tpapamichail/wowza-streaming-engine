<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Servers extends AbstractModule
{
    protected $module = 'servers';

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/{$this->module}";
        parent::__construct();
    }
}