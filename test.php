<?php

require_once "Customer.php";
require_once "Movie.php";
require_once "Rental.php";
require_once "RegularPrice.php";
require_once "NewReleasePrice.php";
require_once "ChildrensPrice.php";

$customer = new Customer("John Doe", 12);

$movie_1 = new Movie("Despicable Me 2", 2);
$movie_2 = new Movie("Grown Ups 2", 0 );
$movie_3 = new Movie("Pacific Rim", 1);
$movie_4 = new Movie("The Heat", 0);

$rental_1 = new Rental($movie_1, 3);
$rental_2 = new Rental($movie_2, 1);
$rental_3 = new Rental($movie_3, 7);

$customer->add_rental($rental_1);
$customer->add_rental($rental_2);
$customer->add_rental($rental_3);

echo $customer->statement();