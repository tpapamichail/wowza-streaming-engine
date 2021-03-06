<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Users extends AbstractModule
{
    protected $module         = 'users';
    protected $allowedMethods = ['GET', 'POST', 'PUT', 'DELETE'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/{$this->module}";
    }
}