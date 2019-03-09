<?php

$argc = 2;
$argv = ['_', $_GET['action'], $_GET['value']];

require __DIR__ . '/../app/hue.php';

header('Content-Type: image/gif');
echo base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==');
exit;