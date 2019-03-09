<?php

require __DIR__ . '/../src/curl.php';
require __DIR__ . '/../src/time.php';

$secondsTillNextSatellite = $argv[1] ?? 4501;

/*
$satellites = curl('GET', 'http://spacebar.hurma.tv/satellites');
$first = array_shift($satellites);
if (!empty($first)) {
  $secondsTillNextSatellite = $first['start_utc'] - $utc;
}
*/

echo 'Next satellite will be seen at your location in ' . secondsToTime($secondsTillNextSatellite) . PHP_EOL;
