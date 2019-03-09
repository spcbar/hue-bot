<?php

function on($lampUrl)
{
    curl('PUT', $lampUrl, ['on' => true]);
}

function off($lampUrl)
{
    curl('PUT', $lampUrl, ['on' => false]);
}

function brightness($lampUrl, $brightness, $transition)
{
    curl('PUT', $lampUrl, ['bri' => $brightness, 'transitiontime' => $transition]);
}

function hue($lampUrl, $hue)
{
    curl('PUT', $lampUrl, ['hue' => $hue, 'transitiontime' => 0]);
}

function sat($lampUrl, $sat)
{
    curl('PUT', $lampUrl, ['sat' => $sat, 'transitiontime' => 0]);
}
