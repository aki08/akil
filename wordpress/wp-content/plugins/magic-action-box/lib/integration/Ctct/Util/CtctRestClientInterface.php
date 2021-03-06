<?php
/**
 * Interface for issuing HTTP requests
 *
 * @package Util
 * @author Constant Contact
 */
interface CtctRestClientInterface
{
    /**
     * Make an Http GET request
     * @param $url - request url
     * @param array $headers - array of all http headers to send
     * @return CurlResponse - The response body, http info, and error (if one exists)
     */
    public function get($url, array $headers);

    /**
     * Make an Http POST request
     * @param $url - request url
     * @param array $headers - array of all http headers to send
     * @param $data - data to send with request
     * @return CurlResponse - The response body, http info, and error (if one exists)
     */
    public function post($url, array $headers = array(), $data = null);

    /**
     * Make an Http PUT request
     * @param $url - request url
     * @param array $headers - array of all http headers to send
     * @param $data - data to send with request
     * @return CurlResponse - The response body, http info, and error (if one exists)
     */
    public function put($url, array $headers = array(), $data = null);

    /**
     * Make an Http DELETE request
     * @param $url - request url
     * @param array $headers - array of all http headers to send
     * @return CurlResponse - The response body, http info, and error (if one exists)
     */
    public function delete($url, array $headers = array());
}
