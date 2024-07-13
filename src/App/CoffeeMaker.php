<?php
namespace App;
class CoffeeMaker
{
    public function __construct(private readonly Pump $pump, private readonly Heater $heater)
    {
    }
    
public function brew(){
        $this->heater->on();
        $this->pump->pump();
        echo '[-]P coffee! [_]P';
        $this->heater->off();
    }
}