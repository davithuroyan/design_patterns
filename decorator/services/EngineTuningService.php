<?php


class EngineTuningService extends CarTuningDecorator
{
    public function __construct(CarTuning $carTuning)
    {
        parent::__construct($carTuning);

        echo 'Engine tuning <br>';
    }

    public function getSummary(): float
    {
        return parent::getSummary() + 99.50;
    }
}