<?php

class Parking
{
    protected $vehicle;
    protected $hours;

    public function __construct($vehicle, $hours)
    {
        $this->vehicle = $vehicle;
        $this->hours = $hours;
    }
}
