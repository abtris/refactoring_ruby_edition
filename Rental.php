<?php

class Rental
{
	public $movie;

	public $days_rented;

	public function __construct($movie, $days_rented)
	{
		$this->movie = $movie;
		$this->days_rented = $days_rented;
	}
}