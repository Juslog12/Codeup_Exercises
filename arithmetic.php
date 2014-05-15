<?php

function add($a, $b) {
	if (is_numeric ($a) && is_numeric($b)) {
    	echo $a + $b .PHP_EOL;
    } else {
		echo "ERROR: both {$a} and {$b} should be numbers\n";
	}	
}

function subtract($a, $b) {
    if (is_numeric ($a) && is_numeric ($b)) {
    	echo $a - $b .PHP_EOL;
    } else {
		echo "ERROR: both {$a} and {$b} should be numbers\n";
	}
}

function multiply($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	echo $a * $b .PHP_EOL;
    } else {
		echo "ERROR: both {$a} and {$b} should be numbers\n";
	}
}

function divide($a, $b) {
    if  ($b == 0) {
		echo "Cannot divide by zero.  Please choose another number\n";
	} elseif (is_numeric ($a) && is_numeric($b)) { 
    	echo $a / $b .PHP_EOL;
    } else {
		echo "ERROR: both {$a} and {$b} should be numbers\n";
	}
}

function modulus($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	echo $a % $b .PHP_EOL;
    } else {
		echo "ERROR: both {$a} and {$b} should be numbers\n";
	}
}

add(20, J);
subtract(5, 10);
multiply(3, 3);
divide(2, 0);
modulus (3,j);




