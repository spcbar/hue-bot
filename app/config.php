<?php

$config = [
    'ip'       => '10.0.0.116',
    'username' => 'op8ZXJfelTeNgmtBdr-7F5NQVSri30VN5IgDcUDt',
    'lamp_id'  => 5,
];

$config['lampUrl'] = sprintf('http://%s/api/%s/lights/%s/state', $config['ip'], $config['username'], $config['lamp_id']);

return $config;