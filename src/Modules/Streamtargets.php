<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Config\Config;

class Streamtargets extends AbstractModule
{
    protected $module         = 'streamtargets';
    protected $allowedMethods = ['GET', 'POST', 'PUT', 'DELETE'];

    public function __construct()
    {
        $this->prefixUrl = Config::$version . "/servers/" . Config::$serverName . "/vhosts/" . Config::$vhostName . "/applications/live/pushpublish/mapentries";
    }
}