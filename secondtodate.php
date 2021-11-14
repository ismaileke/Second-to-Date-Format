<?php

/**
 * @param float $time
 * 
 * @return string
 */

function secondToDateFormat (float $time = 0) : string {
    if ($time < 0) return "Please enter a number greater than 0";
    $year = floor($time / 31556926);
    $time = $time - (floor($time / 31556926) * 31556926);
    $day = floor(($time / 3600) / 24);
    $time = $time - (($day * 24) * 3600);
    $hour = floor($time / 3600);
    $time = $time - ($hour * 3600);
    $minute = floor($time / 60);
    $second = ($time - ($minute * 60));
    return $year . " Year / " . $day . " Day / " . $hour . " Hour / " . $minute . " Minute / " . $second . " Second";
}
?>