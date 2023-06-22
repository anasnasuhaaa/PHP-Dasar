<?php
class parents
{
    var string $name;
    var string $addres;

    function SayHello(string $name): void
    {
        echo "Hello $this->name from $this->addres, My Name is $name" . PHP_EOL;
    }
}

class child extends parents{

}

// Show
$parent = new parents();
$parent->name = 'Arif';
$parent->addres = 'Saudi';
$parent->SayHello('Amir');

// Show Inheritance 
$parent2 = new child();
$parent2->name = 'Nabil';
$parent2->addres = 'Mexico';
$parent2->SayHello('Husein');
