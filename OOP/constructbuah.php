<?php

class buah{
    public $name;
    var $price;
    public function __construct(string $name, int $price){
        $this->name=$name;
        $this->price=$price;
    }
}

$buah1 = new buah("Mangga",20000);
var_dump($buah1);