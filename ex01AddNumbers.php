<?php

//1. Write a Program that prompts the user for two numbers and ads them together.

echo "Please enter number 1: ";
$number1 = stream_get_line(STDIN, 1024, PHP_EOL);

echo "Please enter number 2: ";
$number2 = stream_get_line(STDIN, 1024, PHP_EOL);

$AddNumbers = $number1  + $number2;

echo sprintf("%-10.2f", $number1) .sprintf("%-10.2f",  $number2) ."\n"
    .sprintf("%-10.2f", $AddNumbers);
?>