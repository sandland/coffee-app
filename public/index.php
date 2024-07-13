<?php

use App\CoffeeMaker;
use App\ElectricHeater;
use App\Thermosipon;

require __DIR__ . '/../vendor/autoload.php';

$heater = new ElectricHeater();
$pump = new Thermosipon($heater);
$coffeeMaker = new CoffeeMaker($pump, $heater);

$coffeeMaker->brew();