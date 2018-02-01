<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Monitoring extends AbstractModule
{
    protected $module         = 'monitoring';
    protected $allowedMethods = ['GET', 'PUT'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}