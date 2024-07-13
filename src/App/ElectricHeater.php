<?php
namespace App;
class ElectricHeater implements Heater {
    
    private bool $heating = false;

    public function on(): void
    {
        echo '~ ~ ~ heating ~ ~ ~ </br>';
        $this->heating = true;
    }

    public function off(): void
    {
        $this->heating= false;
    }

    public function isHot(): bool
    {
        return $this->heating;
    }
}