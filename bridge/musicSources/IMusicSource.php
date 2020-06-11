<?php


interface IMusicSource
{
    public function playByNumber(int $num);

    public function playByGenre(string $genre);

    public function playBySinger(string $author);
}