<?php

require 'functions.php';
// require 'router.php';

class person{
    
    public $name;
    public $age;

    public function breathe(){

        echo $this->name . ' is breathing! and he is ' . $this->age;

    }

}

$person = new person();

$person->name = 'john doe';
$person->age = 25;

$person->breathe();

// $person2 = new person();

// $person2->name = 'divine';
// $person2->age = 30;

// dd($person);


