<?php

include_once __DIR__ . '/classi/movie.php';

$movies= [];

$movie1 = new Movie( 'Titanic', 1998, 'Drammatico', 6 );
echo $movie1->Vote();
var_dump($movie1);
$movie2 = new Movie( 'Cena di Natale', 1993, 'Thriller', 5 );
echo $movie2->Vote();
var_dump($movie2);
$movie3 = new Movie( 'Bambi', 1993, 'Comedy', 5 );
echo $movie3->Vote();
var_dump($movie3);
$movie4 = new Movie( 'La Sirenetta', 1993, 'Fantasy', 5 );
echo $movie4->Vote();
var_dump($movie4);
$movie5 = new Movie( 'Cena di Natale', 1993, 'Animazione', 5 );
echo $movie5->Vote();
var_dump($movie5);


?>