<?php

namespace WowzaStreamingEngine\Modules;

class Restinfo extends AbstractModule
{
    protected $module = 'restinfo';

    public function get($stringUrl = null)
    {
        $strUrl = "{$this->module}";

        return $this->request->exec($strUrl, "GET");
    }
}