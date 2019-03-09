<?php

require __DIR__ . '/../src/curl.php';

$config  = require __DIR__ . '/config.php';
$baseUrl = sprintf('http://%s/api/%s', $config['ip'], $config['username']);
$lampUrl = sprintf('%s/lights/%s/state', $baseUrl, $config['lamp_id']);

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
        $transition = !empty($argv[3]) ? (int)$argv[3] : 0;
        curl('PUT', $lampUrl, ['bri' => $brightness, 'transitiontime' => $transition]);
        break;

    default:
        exit('Unsupported command');
}