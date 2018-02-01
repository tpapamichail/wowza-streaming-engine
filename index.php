<?php

require __DIR__ . "/vendor/autoload.php";

use WowzaStreamingEngine\Response\Response;
use \WowzaStreamingEngine\WowzaStreamingEngine;

$wse = new WowzaStreamingEngine([
    'host'       => 'dev.ciclano.io',
    'port'       => '8087',
    'username'   => 'admin',
    'password'   => '790610',
    'serverName' => '_defaultServer_',
    'vhostName'  => '_defaultVHost_',
    'debug'      => false,
]);

$result = $wse->post('restinfo', function (Response $response) {
    return $response->getBody();
});

echo "<pre>";
print_r($result);
echo "</pre>";
exit();