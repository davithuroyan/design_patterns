<?php


class DefaultPlayer implements IPlayer
{
    public function play(int $number): void
    {
        echo 'Playing with Default player track number: [' . $number . ']<br><br>';
    }
}