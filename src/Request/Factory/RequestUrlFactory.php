<?php

namespace WowzaStreamingEngine\RestApi\V2\Request\Factory;

use WowzaStreamingEngine\RestApi\V2\Request\RequestUrl;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class RequestUrlFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new RequestUrl(
            $serviceLocator,
            $serviceLocator->get(\WowzaStreamingEngine\Xml\WowzaConfigXml::class)->find()
        );
    }
}