<?php


abstract class MusicSource implements IMusicSource
{
    protected $player;


    public function __construct(IPlayer $player)
    {
        $this->player = $player;
    }

    public function findByGenre(string $genre): int
    {
        return rand(1, 20);
    }

    public function findBySinger(string $singer): int
    {
        return rand(1, 20);
    }
}