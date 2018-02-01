<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Vhosts extends AbstractModule
{
    protected $module         = 'vhosts';
    protected $allowedMethods = ['GET', 'POST', 'PUT', 'DELETE'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}