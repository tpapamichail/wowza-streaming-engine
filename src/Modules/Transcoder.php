<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Transcoder extends AbstractModule
{
    protected $module         = 'transcoder';
    protected $allowedMethods = ['GET'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}