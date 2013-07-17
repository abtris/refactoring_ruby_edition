<?php

class NewReleasePrice
{
		public function frequent_renter_points($days_rented)
		{
			return ($days_rented > 1) ? 2 : 1;
		}

		public function charge($days_rented)
		{
			return $days_rented * 3;
		}
}