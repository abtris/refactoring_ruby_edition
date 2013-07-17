<?php

class NewReleasePrice
{
		public function charge($days_rented)
		{
			return $days_rented * 3;
		}
}