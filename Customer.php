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
		$result = "Rental Record for $this->name\n";
		foreach ($this->rentals as $element) {						
      // show figures for this rental
      $result .= "\t" . $element->movie->title . "\t" . (string) $element->movie->charge($element->days_rented) . "\n";
		}
 		// add footer lines
    $result .= "Amount owed is {$this->total_charge()} \n";
    $result .= "You earned {$this->total_frequent_renter_points()} frequent renter points";
    return $result;
	}	

 	public function html_statement()
 	{
    $result = "<h1>Rentals for <em>#{@name}</em></h1><p>\n";
    foreach ($this->rentals as $element) {						
      // show figures for this rental
      $result .= "\t" + $element->movie->title . ": " . (string) $element->charge() . "<br>\n";
    }
    // add footer lines
    $result .= "<p>You owe <em>{$this->total_charge()}</em><p>\n";
    $result .= "On this rental you earned " .
           "<em>{$this->total_frequent_renter_points()}</em> " .
           "frequent renter points<p>";
    return $result;
	}

	public function total_charge()
	{
		$result = 0;
		foreach ($this->rentals as $element) {						
			$result += $element->movie->charge($element->days_rented);
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