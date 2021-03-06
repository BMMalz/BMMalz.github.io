<?php
    /* Michael Gousie
       Web Development, Fall 2017
       File: weather.php

       Sets up a little weather forecast JSON formatted database.
       Returns JSON weather forecast to basic request.
       (Version 1)
    */

class User {
    public $success = false;
    public $forecast = "";
}

class Day {
    public $high = "";
    public $low = "";
    public $desc = "";
}

$day0 = new Day();
$day0->high = 90;
$day0->low = 72;
$day0->desc = "sunny";
$day1 = new Day();
$day1->high = 92;
$day1->low = 73;
$day1->desc = "partly sunny";
$day2 = new Day();
$day2->high = 87;
$day2->low = 64;
$day2->desc = "rain";
$day3 = new Day();
$day3->high = 88;
$day3->low = 65;
$day3->desc = "cloudy";
$day4 = new Day();
$day4->high = 90;
$day4->low = 68;
$day4->desc = "partly cloudy";

$user = new User();
$user->success = true;
$user->forecast  = array ($day0, $day1, $day2, $day3, $day4);

echo json_encode($user);
?>
