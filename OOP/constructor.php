<?php
class constructor{
    var string $name;
    var ?string $addres;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $addres){
        $this->name = $name;
        $this->addres = $addres;
    }
}

$first = new constructor('Anas Nasuha', null);
var_dump($first);