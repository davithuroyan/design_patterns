<?php

include_once './musicSources/IMusicSource.php';
include_once './musicSources/MusicSource.php';
include_once './musicSources/CD.php';
include_once './musicSources/USB.php';
include_once './musicSources/Tape.php';
include_once './players/IPlayer.php';
include_once './players/DefaultPlayer.php';
include_once './players/NewPlayer.php';


$source = new CD(new DefaultPlayer());

$source->playByNumber(12);
$source->playByGenre('rock');


$source = new Tape(new NewPlayer());

$source->playByGenre('pop');

$source->playBySinger('Serj Tankian');
$source->playBySinger('Justin Bieber');
