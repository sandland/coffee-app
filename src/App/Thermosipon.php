<?php
namespace App;
class Thermosipon implements Pump {

    public function __construct(private readonly Heater $heater)
    {
    }

    public function pump(): void
    {
        if ($this->heater->isHot()){
            echo '=> => Pumping => =>';
        }
    }

}