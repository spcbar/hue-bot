<?php

if ($_GET['phase'] < 0 || $_GET['phase'] > 10) {
    exit(0);
}

file_put_contents(__DIR__ . '/phase.dat', $_GET['phase']);