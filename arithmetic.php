<?php

function add($a, $b) {
	if (is_numeric ($a) && is_numeric($b)) {
    	echo $a + $b;
    } else {
		echo "ERROR: both a and b should be numbers\n";
	}
}

function subtract($a, $b) {
    if (is_numeric ($a) && is_numeric($b)) {
    	echo $a - $b .PHP_EOL;
    } else {
		echo "ERROR: both a and b should be numbers\n";
	}
}

function multiply($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	echo $a * $b .PHP_EOL;
    } else {
		echo "ERROR: both a and b should be numbers\n";
	}
}

function divide($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	echo $a / $b .PHP_EOL;
    } else {
		echo "ERROR: both a and b should be numbers\n";
	}
}

function modulus($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	echo $a % $b .PHP_EOL;
    } else {
		echo "ERROR: both a and b should be numbers\n";
	}
}

add(J, 20);
subtract(J, 10);
multiply(J, 3);
divide(J, 5);
modulus (J,2);




