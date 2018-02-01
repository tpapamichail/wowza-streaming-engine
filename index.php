<?php

require __DIR__ . "/vendor/autoload.php";

use WowzaStreamingEngine\Config\Config;
use WowzaStreamingEngine\Response\Response;
use \WowzaStreamingEngine\WowzaStreamingEngine;

$wse = new WowzaStreamingEngine([
    'host'         => 'dev.ciclano.io',
    'port'         => '8087',
    'username'     => 'admin',
    'password'     => '790610',
    'serverName'   => '_defaultServer_',
    'vhostName'    => '_defaultVHost_',
    'responseType' => 'json',
    //'debug'        => true,
]);

//$result = $wse->put('applications', 'app1511289329', [
//    'description' => 'Alterado via api',
//], function (Response $response) {
//    return $response->getBodyToArray();
//});

//Config::$version = 'v3';

$result = $wse->get('vhosts', function (Response $response) {
    return $response->getBody();
});

echo $result;