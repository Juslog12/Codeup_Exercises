<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ',$physicists_string);

//$famous_fake_physicists = humanized_lists(physicists_string);

//echo "Some of the most famous fictional theoretical physicists are {famous_fake_physicists. ";

$and = array_pop($physicists_array);

array_push($physicists_array, "and");

$famous_fake_physicists_and = implode(', ', $physicists_array);

echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists_and " . $and . PHP_EOL;

?>