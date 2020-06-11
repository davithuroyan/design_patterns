<?php


class DisksTuningService extends CarTuningDecorator
{
    public function __construct(CarTuning $carTuning)
    {
        parent::__construct($carTuning);

        echo 'Disks tuning <br>';
    }

    public function getSummary(): float
    {
        return parent::getSummary() + 12.30;
    }
}