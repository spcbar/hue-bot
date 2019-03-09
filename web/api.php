<?php

$argc = 2;
$argv = ['_', 'brightness', $_GET['br']];

require __DIR__ . '/../hue.php';

header('Content-Type: image/gif');
echo base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==');
exit;
