<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function test ($a) {
		if (isset($a)) {
			return " is SET.\n";
		} elseif (empty($a)) {
			return " is EMPTY.\n";
		}
}


// TEST: If var $nothing is set, display '$nothing is SET'

echo '$nothing' . test($nothing);
echo '$something' . test($something);



// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'



// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results

$serial = serialize($array);
	echo "\$array serialized: $serial\n";

$clone = unserialize($serial);
	print_r($clone);
		
