<?php

fwrite(STDOUT, "Please choose an increment\n");

	$increment = trim(fgets(STDIN));

fwrite(STDOUT, "Please choose a number\n");

	$first_num = trim(fgets(STDIN));

if (!is_numeric($first_num)) 
{
	echo "Please enter a numeric value\n";
}

if ($first_num = "") 
{
		echo "Please enter a numeric value\n";
}

fwrite(STDOUT, "Please choose another number\n");

$second_num = trim(fgets(STDIN));

if (!is_numeric($second_num)) 
{
	echo "Please enter a numeric value";
}	

if ($second_num = "") 
{
	echo "Please enter a numeric value";
}	

for ($i = $first_num; $i <= $second_num; $i = $increment++) 
{
	echo "{$i}\n";
}

?>


