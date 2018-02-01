<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Applications extends AbstractModule
{
    protected $module = 'applications';

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/vhosts/" . Config::$vhostName . "/{$this->module}";
        parent::__construct();
    }
}