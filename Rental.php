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

	public function frequent_renter_points()
	{
			return ($this->movie->price_code == Movie::NEW_RELEASE && $this->days_rented > 1) ? 2 : 1;
	}		
}