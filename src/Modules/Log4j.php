<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Log4j extends AbstractModule
{
    protected $module         = 'log4j';
    protected $allowedMethods = ['GET', 'PUT'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}