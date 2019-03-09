<?php

require __DIR__ . '/bootstrap.php';

for ($i = 0; $i < 255; $i += 5) {
    echo $i . PHP_EOL;
    usleep(100000 - $i * 30);
    brightness($config['lampUrl'], 0,0);
    usleep(100000 - $i * 30);
    brightness($config['lampUrl'], 200,0);
}