<?php


class StyleTuningService extends CarTuningDecorator
{
    public function __construct(CarTuning $carTuning)
    {
        parent::__construct($carTuning);

        echo 'Style tuning <br>';
    }

    public function getSummary(): float
    {

        return parent::getSummary() + 19.99;
    }
}