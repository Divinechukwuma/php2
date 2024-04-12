<?php

class validator
{
    //this is a function of a classs that is validating the form input and setting varriable to be filled by the controller 
    //this is a pure function
    //this is a pure function that isnt access from the outside from and no $this-> keyword
    public static function string($value, $min = 1, $max = INF)
    {

        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

}