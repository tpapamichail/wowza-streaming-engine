<?php

namespace WowzaStreamingEngine\Modules;

class Restinfo extends AbstractModule
{
    protected $module         = 'restinfo';
    protected $allowedMethods = ['GET'];

    public function __construct()
    {
        $this->prefixUrl = "{$this->module}";
    }
}