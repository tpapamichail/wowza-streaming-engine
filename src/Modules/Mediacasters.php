<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Mediacasters extends AbstractModule
{
    protected $module         = 'mediacasters';
    protected $allowedMethods = ['GET'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}