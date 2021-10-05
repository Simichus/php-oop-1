<?php

require_once __DIR__ . '/../Model/Movie.php';

$first_movie = new Movie('Free Guy', 'Shawn Levy');
$second_movie = new Movie('Space Jam', 'Malcolm D. Lee');

$movies = [];
$movies[] = $first_movie;
$movies[] = $second_movie;
