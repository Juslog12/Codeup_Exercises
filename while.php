<?php

//write output
//fwrite(STDOUT, "Pick a number between 1-100. What is your number")
//Get the input from user
//$variable = fgets(STDIN)
//$variable == (int) 2

$min = 1;
$max = 100;

int rand (int $ min, int max);

fwrite(STDOUT, 'What is your number?');

$number = int fgets(STDIN);


if ($number == int rand) 