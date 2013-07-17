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
		$this->price_code = $price_code;
	}
}