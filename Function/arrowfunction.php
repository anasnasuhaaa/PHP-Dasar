<?php
$firstname="Anas";
$lastname="Nasuha";

//Anonimous Functon
$anonimousfunction= function () use ($firstname, $lastname){
    return"Hello $firstname $lastname".PHP_EOL;
};

//Arrow Function
$arrowfunction= fn () => "hello $firstname $lastname";

echo $anonimousfunction();
echo $arrowfunction(); 