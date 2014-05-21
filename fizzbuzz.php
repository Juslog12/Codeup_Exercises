<?php

//pring numbers between 1 and 100
//if divisible by 3 write fizz
//if divisible by 5 write buzz
//if divisible by 3 and 5 write fizzbuzz

//for ($a = 1; $a <= 100; $a++) {echo "{$a}\n"; 

//	if ($a % 3 == 0) {echo "fizz\n";}	

for ($i = 1; $i <= 100  ; $i++) {

	if ($i % 15 == 0) {

		echo "fizzbuzz\n";
	}

	elseif ($i % 3 == 0) {

		echo "fizz\n";
	}


	elseif ($i % 5 == 0) {

		echo "buzz\n";
	}

	else  {
		echo $i . PHP_EOL;
	}
}



