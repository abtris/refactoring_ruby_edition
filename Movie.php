<?php

class Movie
{
	const REGULAR = 0;
	const NEW_RELEASE = 1;
	const CHILDRENS = 2;

	public $title;

	public $price_code;

	public function __construct($title, $price_code)
	{
		$this->title = $title;
		$this->price_code($price_code);
	}

	public function price_code($price)
	{
		$this->price = $price;
	}

	public function charge($days_rented)
	{
			return $this->price->charge($days_rented);
	}

  public function frequent_renter_points($days_rented)
  {
   		return $this->price->frequent_renter_points($days_rented);
	}
}