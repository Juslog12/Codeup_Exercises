<?php

$fruits = array (
	array ('name' => 'apples', 'color' => 'red'),
	array ('name' => 'oranges', 'color' => 'orange'),
	array ('name' => 'bananas', 'color' => 'yellow'),
	);

foreach ($fruits as $fruit) {
	echo "{$fruit['name']} are {$fruit['color']} and delicious.\n";
}


$fruits = array('appple', 'orange', 'bananas');

for ($i= 0; $i < count($fruits); $i++) {
	echo $fruits[$i] .PHP_EOL; 
}