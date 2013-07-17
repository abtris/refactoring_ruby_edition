<?php

class ChildrensPrice extends DefaultPrice
{
	public function charge($days_rented)
	{
			$result = 1.5;
			if ($days_rented > 3) {
				$result += ($days_rented - 3) * 1.5;
			}
			return $result;
	}
}