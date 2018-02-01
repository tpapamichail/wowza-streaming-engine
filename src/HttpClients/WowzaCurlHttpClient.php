<?php

namespace WowzaStreamingEngine\HttpClients;

use WowzaStreamingEngine\Config\Config;
use WowzaStreamingEngine\Response\Response;

class WowzaCurlHttpClient
{
    protected $curlErrorMessage = '';
    protected $curlErrorCode    = 0;
    protected $rawResponse;
    protected $curl;

    public function __construct()
    {
        $this->curl = new Curl;
    }

    /**
     * @inheritdoc
     */
    public function send($url, $method, $body, array $headers, $timeOut, $authentication)
    {
        $this->openConnection($url, $method, $body, $headers, $timeOut, $authentication);
        $this->sendRequest();

        if ($curlErrorCode = $this->curl->errno()) {
            return $this->curl->error();
        }

        // Separate the raw headers from the raw body
        list($rawHeaders, $rawBody) = $this->extractResponseHeadersAndBody();

        $this->closeConnection();

        return new Response($rawHeaders, $rawBody, $url);
    }

    /**
     * Opens a new curl connection.
     *
     * @param string $url The endpoint to send the request to.
     * @param string $method The request method.
     * @param string $body The body of the request.
     * @param array $headers The request headers.
     * @param int $timeOut The timeout in seconds for the request.
     */
    public function openConnection($url, $method, $body, array $headers, $timeOut, $authentication)
    {
        if (Config::$debug === true) {
            echo "<ul>";
            echo "    <li>Url: $url</li>";
            echo "    <li>Method: $method</li>";
            echo "    <li>Body: " . print_r($body) . "</li>";
            echo "    <li>Headers: " . print_r($headers) . "</li>";
            echo "    <li>TimeOut: $timeOut</li>";
            echo "    <li>Authentication: $authentication</li>";
            echo "</ul>";
        }
        $options = [
            CURLOPT_CUSTOMREQUEST  => $method,
            CURLOPT_HTTPHEADER     => $this->compileRequestHeaders($headers),
            CURLOPT_URL            => $url,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT        => $timeOut,
            CURLOPT_RETURNTRANSFER => true, // Follow 301 redirects
            CURLOPT_HEADER         => true, // Enable header processing
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_USERPWD        => $authentication,
            CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
        ];

        if ($method !== "GET") {
            $options[CURLOPT_POSTFIELDS] = json_encode($body);
        }

        $this->curl->init();
        $this->curl->setoptArray($options);
    }

    /**
     * Closes an existing curl connection
     */
    public function closeConnection()
    {
        $this->curl->close();
    }

    /**
     * Send the request and get the raw response from curl
     */
    public function sendRequest()
    {
        $this->rawResponse = $this->curl->exec();
    }

    /**
     * Compiles the request headers into a curl-friendly format.
     *
     * @param array $headers The request headers.
     *
     * @return array
     */
    public function compileRequestHeaders(array $headers)
    {
        $return = [];

        foreach ($headers as $key => $value) {
            $return[] = $key . ': ' . $value;
        }

        return $return;
    }

    /**
     * Extracts the headers and the body into a two-part array
     *
     * @return array
     */
    public function extractResponseHeadersAndBody()
    {
        $parts      = explode("\r\n\r\n", $this->rawResponse);
        $rawBody    = array_pop($parts);
        $rawHeaders = implode("\r\n\r\n", $parts);

        return [trim($rawHeaders), trim($rawBody)];
    }

}