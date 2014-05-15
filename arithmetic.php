<?php

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
    echo $a % $b . PHP_EOL;
}

add(10, 20);
subtract(0, 10);
multiply(3, 3);
divide(25, 5);
modulus (3,2);

