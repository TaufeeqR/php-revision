<?php

// VARIABLES
$name = "   Bob     Is      ";
$no1 = "Who let the dogs out?";
$no2 = "woof woof woof woof";

// STRING TO LOWERCASE

    echo strtolower($name) . "<br>";

// STRING TO UPPERCASE
    echo strtoupper($name) . "<br>";

// REMOVING WHTESPACES
    echo trim($name) . "<br>";

// REMOVING WHITESPACES AND LETTERS
    echo trim($name, " Bs") . "<br>"; 

// GETTING THE STRING POSITION
    echo strpos($no1, $no2) . "<br>";

// GETTING STRING LENGTH
    echo strlen("Who let the dogs out?") . "<br>";

// SUBSTRING - SUBTRACTING A STRING FROM A STRING
$old = "Old mcDonald had a farm eyi eyi oh";
$new = substr($old, 12);

    echo $new . "<br>";

// STRING REPLACE

$old1 = "Who let the dogs out?";
$new1 = str_replace("dogs", "cats", $old1);

    echo $new1;

?>