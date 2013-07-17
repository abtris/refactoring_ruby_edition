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

	public function price_code($value)
	{
		$this->price_code = $value;
		switch ($this->price_code) {
			case self::REGULAR:
				$this->price = new RegularPrice();
				break;
			case self::NEW_RELEASE:
				$this->price = new NewReleasePrice();
				break;
			case self::CHILDRENS:
				$this->price = new ChildrensPrice();
				break;
		}
	}
}