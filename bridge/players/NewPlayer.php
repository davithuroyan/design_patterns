<?php


class NewPlayer implements IPlayer
{
    public function play(int $number): void
    {
        echo 'Playing with New player track number: [' . $number . ']<br><br>';
    }
}