<?php

function error($a, $b, $flag){
	if ($flag === 1) {
		echo "ERROR: both {$a} and {$b} should be numbers\n";
	} else {
		echo "Cannot divide by zero. Please choose another number\n";
	}
}

function add($a, $b) {
	if (is_numeric ($a) && is_numeric($b)) {
    	echo $a + $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}	
}

function subtract($a, $b) {
    if (is_numeric ($a) && is_numeric ($b)) {
    	echo $a - $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}
}

function multiply($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	echo $a * $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}
}

function divide($a, $b) {
    if  ($b == 0) {
		error($a, $b, 2);
	} elseif (is_numeric ($a) && is_numeric($b)) { 
    	echo $a / $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}
}

function modulus($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	echo $a % $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}
}

add(20, "J");
subtract(5, 10);
multiply(3, 3);
divide(2, 0);
modulus (3,'J');