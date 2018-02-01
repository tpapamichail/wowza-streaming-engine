<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Listeners extends AbstractModule
{
    protected $module         = 'listeners';
    protected $allowedMethods = ['GET', 'PUT'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}