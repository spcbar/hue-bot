<?php

require __DIR__ . '/src/curl.php';
$config = require __DIR__ . '/config.php';
$baseUrl = sprintf('http://%s/api/%s', $config['ip'], $config['username']);
$url = function ($path, ... $params) use ($baseUrl) {
    return vsprintf($baseUrl . $path, $params);
};

if ($argc < 2) {
    exit('Usage: ' . $argv[0] . " COMMAND\n");
}

switch ($argv[1]) {
    case 'on':
	curl('PUT', $url('/lights/%s/state', $config['lamp_id']), ['on' => true]);
        break;
    case 'off':
	curl('PUT', $url('/lights/%s/state', $config['lamp_id']), ['on' => false]);
        break;   default:
        exit('Unsupported command');
}
