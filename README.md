```bash
$ composer require marcelo-correa/wowza-streaming-engine
```
```bash
require __DIR__ . "/vendor/autoload.php";

use WowzaStreamingEngine\Response\Response;
use \WowzaStreamingEngine\WowzaStreamingEngine;

$wse = new WowzaStreamingEngine([
    'host'       => '...',
    'port'       => '8087',
    'username'   => '...',
    'password'   => '...',
    'serverName' => '_defaultServer_',
    'vhostName'  => '_defaultVHost_',
    'debug'      => true,
]);
```
Methods
```bash
    $wse->get('modulo', 'url', callback);
    $wse->post('modulo', 'url', [data], callback);
    $wse->put('modulo', 'url', [data], callback);
    $wse->delete('modulo', 'url', callback);
```

Listar Aplicações
```bash
$result = $wse->get('applications', function (Response $response) {
    return $response->getBodyToArray();
});
```

Listar 1 Aplicação
```bash
$result = $wse->get('applications', 'applicationName', function (Response $response) {
    return $response->getBodyToArray();
});
```