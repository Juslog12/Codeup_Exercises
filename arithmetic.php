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
    	return $a + $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}	
}

function subtract($a, $b) {
    if (is_numeric ($a) && is_numeric ($b)) {
    	return $a - $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}
}

function multiply($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	return $a * $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}
}

function divide($a, $b) {
    if  ($b == 0) {
		return false;
	} elseif (is_numeric ($a) && is_numeric($b)) { 
    	return $a / $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}
}

function modulus($a, $b) {
   if (is_numeric ($a) && is_numeric($b)) { 
    	return $a % $b .PHP_EOL;
    } else {
		error($a, $b, 1);
	}
}

echo add(20, 5);
echo subtract(5, 10);
echo multiply(3, 3);
echo divide(2, 3);
echo modulus (3,1);