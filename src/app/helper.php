<?php
/**
 * V12Chat
 *
 * @category    Helper
 * @package     TEST_APP
 * @author      Ayoub HAMOUDI <hamoudi.ayoub@gmail.com>
 * @copyright   Ayoub
 */

if (! function_exists('curl')) {
    /**
     *
     *
     * @param $url
     * @param string $method
     * @param array $headers
     * @param array $data
     * @return bool|object
     */
    function curl(string $url, array $headers, array $data = [], string $method = 'GET')
    {
            /** @var object $json */
            $json = json_encode($data);
            /** @var string $ch */
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
            if(in_array($method, ['POST', 'PUT', 'PATCH'])){
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            } 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $result = curl_exec($ch);
            curl_close($ch);
            return json_decode($result);

    }

    function get(string $url, array $headers)
    {
            /** @var string $ch */
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $result = curl_exec($ch);
            curl_close($ch);
            return (object)json_decode($result);
    }

    function post(string $url, array $headers, array $data = [])
    {
            /** @var string $ch */
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $result = curl_exec($ch);
            curl_close($ch);
            return (object)json_decode($result);

    }

}