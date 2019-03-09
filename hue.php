<?php

require __DIR__ . '/src/curl.php';
$config = require __DIR__ . '/config.php';
$baseUrl = sprintf('http://%s/api/%s', $config['ip'], $config['username']);
$url = function ($path, ... $params) use ($baseUrl) {
    return vsprintf($baseUrl . $path, $params);
};
$lampUrl = $url('/lights/%s/state', $config['lamp_id']);

if ($argc < 2) {
    exit('Usage: ' . $argv[0] . " COMMAND\n");
}

switch ($argv[1]) {
    case 'on':
        curl('PUT', $lampUrl, ['on' => true]);
        break;

    case 'off':
	    curl('PUT', $lampUrl, ['on' => false]);
        break;

    case 'brightness':
        $brightness = (int)$argv[2];
        $transition = 0;
        if ($transition < 0) {
            $transition = 0;
        }
	    curl('PUT', $lampUrl, ['bri' => $brightness, 'transitiontime' => $transition]);
        break;

    default:
        exit('Unsupported command');
}
header('Content-Type: image/gif');
echo base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==');
exit;
