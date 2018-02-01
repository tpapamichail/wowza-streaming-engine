<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Licenses extends AbstractModule
{
    protected $module         = 'licenses';
    protected $allowedMethods = ['GET', 'PUT'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}