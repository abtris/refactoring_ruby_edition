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

	public function charge()
	{
			$result = 0;
			// determine amounts for each line
			switch ($this->movie->price_code) {
				case Movie::REGULAR:
					$result += 2;
					if ($this->days_rented>2) {
						$result += ($this->days_rented - 2) * 1.5;
					}
					break;
				
				case Movie::NEW_RELEASE:
					$result += $this->days_rented * 3;
					break;

				case Movie::CHILDRENS:
					$result += 1.5;
					if ($this->days_rented>3) {
						$result += ($this->days_rented - 3) * 1.5;
					}	
			}		
			return $result;
	}	

	public function frequent_renter_points()
	{
			return ($this->movie->price_code == Movie::NEW_RELEASE && $this->days_rented > 1) ? 2 : 1;
	}		
}