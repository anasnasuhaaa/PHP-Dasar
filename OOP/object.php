<?php
require_once "class.php";

$person = new Person();
$person->name = "Anas Nasuha";
$person->age = 16;
$person->addres = "Indramayu";
$person->country = "Indonesia";

//var_dump($person);

// echo "Name      : " . $person->name . PHP_EOL;
// echo "Age       : " . $person->age . PHP_EOL;
// echo "Addres    : " . $person->addres . PHP_EOL;
// echo "Country   : " . $person->country . PHP_EOL . PHP_EOL;

$samsung = new smartphone();
$samsung->brand = "Samsung";
$samsung->type = "J2 Prime";
$samsung->price = 1000000;

// echo "Brand     : " . $samsung->brand . PHP_EOL;
// echo "Type      : " . $samsung->type . PHP_EOL;
// echo "Price     : " . number_format($samsung->price, 0, ',', '.') . PHP_EOL;

$person2 = new nullableproperties();
$person2->parameter=null;

// var_dump($person2);

$anas = new hello();
$anas->name = "Anas";
$anas->sayHello(null);
$anas->info();

$joko = new hello();
$joko->name = "Joko";
$joko->sayHello("Aziz");
$joko->info();