<?php

require __DIR__ . '/../src/curl.php';
require __DIR__ . '/../src/time.php';

$secondsTillNextSatellite = $_GET['time'] ?? 4501;

/*
$satellites = curl('GET', 'http://spacebar.hurma.tv/satellites');
$first = array_shift($satellites);
if (!empty($first)) {
  $secondsTillNextSatellite = $first['start_utc'] - $utc;
}
*/

$countdown = secondsToArray($secondsTillNextSatellite);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Countdown</title>
    <link rel="stylesheet" href="/assets/css/countdown.css"/>
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/jquery.countdown.js"></script>
    <script>
        $(function () {
            $('#cd').countdown({
                startTime: '<?= implode(':', $countdown) ?>'
            });
        });
    </script>
</head>
<body class="blank">
<div class="container">
    <h1>Next satellite will be seen at your location in</h1>
    <div class="cd-wrapper">
        <div id="cd"></div>
        <div class="d">
            <div>Days</div>
            <div>Hours</div>
            <div>Minutes</div>
            <div>Seconds</div>
        </div>
    </div>
</div>
</body>
</html>