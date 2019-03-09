<?php

/**
 * @param string $method
 * @param string $url
 * @param array  $data
 *
 * @return array
 */
function curl($method, $url, array $data = []) {
    if ('GET' === $method && !empty($data)) {
        $query = http_build_query($data);
        $url .= '?' . $query;
        unset($data);
    }

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

    if (!empty($data)) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }

    $response = curl_exec($ch);
    
    return $response;
}
