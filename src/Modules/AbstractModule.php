<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Request\Request;
use WowzaStreamingEngine\Response\Response;

abstract class AbstractModule
{
    protected $module;
    protected $prefixUrl;
    protected $allowedMethods;

    /**
     * @var Request
     */
    protected $request;

    /**
     * Applications constructor.
     * @param Request $request
     */
    public function __construct()
    {
        $this->request = new Request;
    }

    public function get($stringUrl = null)
    {
        if (!in_array('GET', $this->allowedMethods))
            return new Response(null, ['message' => 'method GET not available'], null);

        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        return $this->request->exec($strUrl, "GET");
    }

    public function post($stringUrl = null, $body = [])
    {
        if (!in_array('POST', $this->allowedMethods))
            return new Response(null, json_encode(['message' => 'method POST not available']), null);

        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        return $this->request->exec($strUrl, "POST", $body);
    }

    public function put($stringUrl = null, $body = [])
    {
        if (!in_array('PUT', $this->allowedMethods))
            return new Response(null, ['message' => 'method PUT not available'], null);
        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        return $this->request->exec($strUrl, "PUT", $body);
    }

    public function delete($stringUrl = null)
    {
        if (!in_array('DELETE', $this->allowedMethods))
            return new Response(null, ['message' => 'method DELETE not available'], null);

        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        return $this->request->exec($strUrl, "DELETE");
    }
}