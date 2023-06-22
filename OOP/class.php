<?php

class Person
{
    var string $name;
    var int $age;
    var string $addres;
    var string $country;
}

class smartphone
{
    var string $brand;
    var string $type;
    var int $price;
}

// Nullable Properties
class nullableproperties
{
    var ?string $parameter;
}

// Function
class hello
{
    const AUTHOR = "ANSUPEDIA";
    var string $name;
    var ?string $addres;
    var ?string $country;

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello, My name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, My name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . hello::AUTHOR . PHP_EOL;
        // Self keyword
        echo "Autho : " . self::AUTHOR . PHP_EOL;
    }
}
