<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Request\Request;

abstract class AbstractModule
{
    protected $module;
    protected $prefixUrl;

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
        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        return $this->request->exec($strUrl, "GET");
    }

    public function put($stringUrl = null, $body = [])
    {
        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        return $this->request->exec($strUrl, "PUT", $body);
    }

    public function post($stringUrl = null, $body = [])
    {
        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        return $this->request->exec($strUrl, "POST", $body);
    }

    public function delete($stringUrl = null)
    {
        $stringUrl = !is_null($stringUrl) ? "/$stringUrl" : null;
        $strUrl    = "{$this->prefixUrl}$stringUrl";

        return $this->request->exec($strUrl, "DELETE");
    }
}