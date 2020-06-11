<?php


class CD extends MusicSource
{
    public function playByNumber(int $num)
    {
        echo 'Music Source CD. Playing music by Number: [' . $num . ']</br>';
        $this->player->play($num);
    }

    public function playByGenre(string $genre)
    {
        echo 'Music Source CD. Playing music in Genre: [' . $genre . ']</br>';
        $this->player->play($this->findByGenre($genre));
    }

    public function playBySinger(string $singer)
    {
        echo 'Music Source CD. Playing music by Singer: [' . $singer . ']</br>';
        $this->player->play($this->findBySinger($singer));
    }
}