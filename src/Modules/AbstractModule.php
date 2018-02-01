<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Request\Request;
use WowzaStreamingEngine\Response\Response;

abstract class AbstractModule
{
    protected $module;
    protected $prefixUrl;
    protected $allowedMethods;

    public function __call($name, $arguments)
    {
        $stringUrl = $arguments[0];
        $body      = is_array($arguments[1]) ? $arguments[1] : [];

        if (in_array($name, ["get", "post", "put", "delete"]))
            return $this->exec(strtoupper($name), $stringUrl, $body);
        else
            return new Response(null, json_encode(['success' => false, 'message' => "method not available"]), null);
    }

    public function exec($method, $stringUrl = null, $body = [])
    {
        if (!in_array($method, $this->allowedMethods))
            return new Response(null, json_encode(['success' => false, 'message' => "method $method not available"]), null);

        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        $request = new Request;

        return $request->exec($strUrl, $method, $body);
    }
}