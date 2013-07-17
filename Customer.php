<?php

class Customer
{

	public $name;

	public $rentals = array();

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function add_rental($arg)
	{
		$this->rentals[] = $arg;
	}

	public function statement()
	{
		$total_amount = 0;
		$result = "Rental Record for $this->name\n";
		foreach ($this->rentals as $element) {						
      // show figures for this rental
      $result .= "\t" . $element->movie->title . "\t" . (string) $element->charge() . "\n";
      $total_amount += $element->charge();
		}
 		// add footer lines
    $result .= "Amount owed is {$this->total_charge()} \n";
    $result .= "You earned {$this->total_frequent_renter_points()} frequent renter points";
    return $result;
	}	

	public function total_charge()
	{
		$result = 0;
		foreach ($this->rentals as $element) {						
			$result += $element->charge();
		}
		return $result;
	}

	public function total_frequent_renter_points()
	{
		$result = 0;
		foreach ($this->rentals as $element) {						
			$result += $element->frequent_renter_points();
		}
		return $result;		
	}
}