<?php


class CarTuningDecorator implements CarTuning
{
    protected  $carTuning;

    public function __construct(CarTuning $carTuning)
    {
        $this->carTuning = $carTuning;
    }

    public function getSummary(): float
    {
        return $this->carTuning->getSummary();
    }
}