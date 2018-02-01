<?php

namespace WowzaStreamingEngine\Request;

use WowzaStreamingEngine\Config\Config;
use WowzaStreamingEngine\HttpClients\WowzaCurlHttpClient;

class Request
{
    private $url;
    /**
     * @var WowzaCurlHttpClient
     */
    private $wowzaCurlHttpClient;

    /**
     * Request constructor.
     * @param WowzaCurlHttpClient $wowzaCurlHttpClient
     */
    public function __construct()
    {
        $this->wowzaCurlHttpClient = new WowzaCurlHttpClient;
    }

    public function exec($url, $method, Array $body = [])
    {
        $this->setUrl($url);

        $headers = [
            'Content-Type' => 'application/' . Config::$responseType,
            'Accept'       => 'application/' . Config::$responseType,
        ];

        if (Config::$debug === true) echo $this->getUrl();

        return $this->wowzaCurlHttpClient->send($this->getUrl(), $method, $body, $headers, 10, Config::$username . ":" . Config::$password);
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return Request
     */
    public function setUrl($url)
    {
        $this->url = "http://" . Config::$host . ":" . Config::$port . "/$url";

        return $this;
    }
}