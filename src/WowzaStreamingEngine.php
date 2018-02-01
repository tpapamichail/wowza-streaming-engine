<?php

namespace WowzaStreamingEngine;

use WowzaStreamingEngine\Config\Config;

/**
 * @method get($module, ...$args)
 * @method post($module, ...$args)
 * @method put($module, ...$args)
 * @method delete($module, ...$args)
 */
class WowzaStreamingEngine
{
    public function __construct(Array $options)
    {
        Config::setOptions($options);
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this, 'execute'], [$name, $arguments]);
    }

    private function execute($action, $param = [])
    {
        $module   = $param[0];
        $options  = !is_callable($param[1]) ? $param[1] : null;
        $body     = $param[2];
        $callable = end($param);

        $className = "\\WowzaStreamingEngine\\Modules\\" . ucfirst($module);
        $class     = new $className;

        $result = $class->$action($options, $body);
        if (!$result instanceof \WowzaStreamingEngine\Response\Response) {
            die($result);
        }

        return call_user_func($callable, $result);
    }
}