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
		$frequent_renter_points = 0;
		$result = "Rental Record for $this->name\n";
		foreach ($this->rentals as $element) {			
			$this_amount = $this->amount_for($element);
			// add frequent renter points
      $frequent_renter_points += 1;
      // add bonus for a two day new release rental
      if ($element->movie->price_code == Movie::NEW_RELEASE && $element->days_rented > 1) {
          $frequent_renter_points += 1;
      }
      // show figures for this rental
      $result .= "\t" . $element->movie->title . "\t" . (string) $this_amount . "\n";
      $total_amount += $this_amount;
		}
 		// add footer lines
    $result .= "Amount owed is $total_amount\n";
    $result .= "You earned $frequent_renter_points frequent renter points";
    return $result;
	}

	public function amount_for($rental)
	{
			return $rental->charge();
	}
}