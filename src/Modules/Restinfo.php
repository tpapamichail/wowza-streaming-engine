<?php

namespace WowzaStreamingEngine\Modules;

use WowzaStreamingEngine\Response\Response;

class Restinfo extends AbstractModule
{
    protected $module         = 'restinfo';
    protected $allowedMethods = ['GET'];

    public function get($stringUrl = null)
    {
        if (!in_array('GET', $this->allowedMethods))
            return new Response(null, ['success' => false, 'message' => 'method not available'], null);

        $strUrl = "{$this->module}";

        return $this->request->exec($strUrl, "GET");
    }
}