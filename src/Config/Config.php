<?php

namespace WowzaStreamingEngine\Config;

class Config
{
    public static $host;
    public static $port;
    public static $username;
    public static $password;
    public static $version      = 'v2';
    public static $serverName;
    public static $vhostName;
    public static $responseType = 'json';
    public static $debug        = false;

    public static function setOptions(Array $options)
    {
        foreach ($options as $name => $value) {
            self::$$name = $value;
        }
    }
}