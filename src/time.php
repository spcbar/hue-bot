<?php

function secondsToTime($seconds)
{
    $now  = new \DateTime('@0');
    $then = new \DateTime("@$seconds");

    $interval = $now->diff($then);

    $days    = $interval->format('%a');
    $hours   = $interval->format('%h');
    $minutes = $interval->format('%i');
    $seconds = $interval->format('%s');

    $formatted = '';

    if ($days > 0) {
        $formatted .= $days . ' day' . ($days > 1 ? 's' : '');
    }

    if ($hours > 0) {
        if (!empty($formatted)) {
            if ($minutes > 0 && $seconds > 0) {
                $formatted .= ', ';
            } else {
                $formatted .= ' and ';
            }
        }
        $formatted .= $hours . ' hour' . ($hours > 1 ? 's' : '');
    }

    if ($minutes > 0) {
        if (!empty($formatted)) {
            if ($seconds > 0) {
                $formatted .= ', ';
            } else {
                $formatted .= ' and ';
            }
        }
        $formatted .= $minutes . ' minute' . ($minutes > 1 ? 's' : '');
    }

    if ($seconds > 0) {
        if (!empty($formatted)) {
            $formatted .= ' and ';
        }
        $formatted .= $seconds . ' second' . ($seconds > 1 ? 's' : '');
    }

    return $formatted;
}

function secondsToArray($seconds)
{
    $now  = new \DateTime('@0');
    $then = new \DateTime("@$seconds");

    $interval = $now->diff($then);

    $days    = $interval->format('%a');
    $hours   = $interval->format('%h');
    $minutes = $interval->format('%i');
    $seconds = $interval->format('%s');

    return [
        $days < 10 ? '0' . $days : $days,
        $hours < 10 ? '0' . $hours : $hours,
        $minutes < 10 ? '0' . $minutes : $minutes,
        $seconds < 10 ? '0' . $seconds : $seconds,
    ];
}