<?php

/**
 * Execute this using: php -S localhost:8080
 */

require "ObserverInterface.php";
require "DisplayElementInterface.php";
require "CurrentConditionsDisplay.php";
require "SubjectInterface.php";
require "WeatherData.php";


$weatherData = new WeatherData();
$currentDisplay = new CurrentConditionsDisplay($weatherData);


$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(78, 90, 29.2);

