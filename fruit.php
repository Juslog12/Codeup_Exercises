<?php

$fruits = array 
(
    array ('name' => 'apples', 'color' => 'red'),
    array ('name' => 'oranges', 'color' => 'orange'),
    array ('name' => 'bananas', 'color' => 'yellow'),
);

foreach ($fruits as $fruit) 
{
    echo "{$fruit['name']} are {$fruit['color']} and delicious.\n";
}


$fruits = 
(
    'apples' => 'red',
    'oranges' => 'orange',
    'bananas' => 'yellow'),
);

foreach ($fruits as $fruit) 
{
    echo "{$fruit} are {$color}\n";
}


$fruits = array('appple', 'orange', 'bananas');

for ($i = 0; $i < count($fruits); $i++) 
{
    echo $fruits[$i] .PHP_EOL; 
}

foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}   

?>
