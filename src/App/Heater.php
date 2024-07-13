<?php
namespace App;
interface Heater
{
    public function on(): void;
    public function off(): void;
    public function isHot(): bool;
}

