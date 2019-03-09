<?php

require_once __DIR__ . '/bootstrap.php';

if ($argc < 2) {
    exit('Usage: ' . $argv[0] . " COMMAND\n");
}

switch ($argv[1]) {
    case 'hello':
    case 'on':
        on($config['lampUrl']);
        break;

    case 'goodbye':
    case 'off':
        off($config['lampUrl']);
        break;

    case 'brightness':
        $brightness = (int)$argv[2];
        $transition = !empty($argv[3]) ? (int)$argv[3] : 0;
        brightness($config['lampUrl'], $brightness, $transition);
        break;

    case 'hue':
        $hue = (int)$argv[2];
        hue($config['lampUrl'], $hue);
        break;

    case 'sat':
        $sat = (int)$argv[2];
        sat($config['lampUrl'], $sat);
        break;

    default:
        exit('Unsupported command');
}