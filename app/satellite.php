<?php

require __DIR__ . '/../src/curl.php';
require __DIR__ . '/../src/time.php';

$utc = time();
$secondsTillNextSatellite = $argv[1] ?? 4501;

/*
$satellites = curl('GET', 'http://spacebar.hurma.tv/satellites?utc_time=' . $utc);
$first = array_shift($satellites);
if (!empty($first)) {
  $secondsTillNextSatellite = $first['start_utc'] - $utc;
}
*/

echo 'Next satellite will be seen at your location in ' . secondsToTime($secondsTillNextSatellite) . PHP_EOL;
