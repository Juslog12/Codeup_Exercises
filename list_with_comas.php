<?php

function humanized_lists ($string) {

		$physicists_array = explode(', ', $string);
		//if ($do_sort) {
		//	sort($array);
		//}
		$and = array_pop($physicists_array);
		$last = "and " . $and; 
		array_push($physicists_array, $last);
		$famous_fake_physicists_and = implode(', ', $physicists_array);
		
		//echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists_and " . PHP_EOL;

	return $famous_fake_physicists_and;
}


$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ',$physicists_string);

$famous_fake_physicists = humanized_lists($physicists_string);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}. ";

//$and = array_pop($physicists_array);

//$last = "and " . $and;

//array_push($physicists_array, $last);

//$famous_fake_physicists_and = implode(', ', $physicists_array);

//echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists_and " . PHP_EOL;

?>