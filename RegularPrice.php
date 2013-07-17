<?php

class RegularPrice extends DefaultPrice
{
    public function charge($days_rented)
    {
        $result = 2;
        if ($days_rented > 2) {
            $result += ($days_rented - 2) * 1.5;
        }
        return $result;
    }   
}