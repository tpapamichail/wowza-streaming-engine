<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Mediacache extends AbstractModule
{
    protected $module         = 'mediacache';
    protected $allowedMethods = ['GET', 'POST', 'PUT', 'DELETE'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}