<?php


class ColorTuningService extends CarTuningDecorator
{
    public function __construct(CarTuning $carTuning)
    {
        parent::__construct($carTuning);

        echo 'color tuning <br>';
    }

    public function getSummary(): float
    {
        return parent::getSummary() + 25;
    }
}