<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Publishers extends AbstractModule
{
    protected $module         = 'publishers';
    protected $allowedMethods = ['GET', 'POST', 'DELETE'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}