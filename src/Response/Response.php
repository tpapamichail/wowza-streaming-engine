<?php

namespace WowzaStreamingEngine\Response;

class Response
{
    private $headers;
    private $body;
    private $url;

    /**
     * Response constructor.
     * @param $headers
     * @param $body
     * @param $url
     */
    public function __construct($headers, $body, $url)
    {
        $this->headers = $headers;
        $this->body    = $body;
        $this->url     = $url;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    public function getBodyToArray()
    {
        return json_decode($this->body, true);
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

}