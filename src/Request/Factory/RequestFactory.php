<?php

namespace WowzaStreamingEngine\RestApi\V2\Request\Factory;

use WowzaStreamingEngine\RestApi\V2\Request\Request;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class RequestFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var \WowzaStreamingEngine\RestApi\V2\Authentication\Basic $basic */
        $basic = $serviceLocator->get(\WowzaStreamingEngine\RestApi\V2\Authentication\Basic::class);
        /** @var \WowzaStreamingEngine\RestApi\V2\Request\RequestUrl $requestUrl */
        $requestUrl = $serviceLocator->get(\WowzaStreamingEngine\RestApi\V2\Request\RequestUrl::class);
        /** @var \WowzaStreamingEngine\RestApi\V2\HttpClients\WowzaCurlHttpClient $wowzaCurlHttpClient */
        $wowzaCurlHttpClient = $serviceLocator->get(\WowzaStreamingEngine\RestApi\V2\HttpClients\WowzaCurlHttpClient::class);

        return new Request(
            $basic,
            $requestUrl,
            $wowzaCurlHttpClient
        );
    }
}