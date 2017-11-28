<?php


// Turn off all error reporting
error_reporting(0);


$city =$_GET['city'];

$city=str_replace(" ", "", $city);



$contents =file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");  // assigning contents of this url to a variable.


preg_match('/<span class="phrase">(.*?)</i', $contents, $matches);

print_r($matches[1]);




 ?>
