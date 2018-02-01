<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Tune extends AbstractModule
{
    protected $module         = 'tune';
    protected $allowedMethods = ['GET', 'PUT'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}