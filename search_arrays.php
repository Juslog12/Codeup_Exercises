<?php

// first names
$names = ['Tina', 'Dean', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function array_has_value($needle, $haystack) {
	
	 $search = array_search($needle, $haystack);
	 	
	
	 if(is_int($search)) {
	 	return true;
	 } else {
	 	return false;
	 }
}

//var_dump(array_has_value('Tina', $names));

//var_dump(array_has_value('Bob', $names));

// Could have written it as
// if(array_search($needle, $haystack) === false)
//}
	
//var_dump(array_has_value('Bob', $names));

function array_common_count($array1, $array2)
{
	$count = 0;
	foreach ($array1 as $value) { 
		foreach ($array2 as $compare) {
 			if ($value == $compare){
 				$count++; 			
			} 
 		}
	}

	return $count;

	
}

	echo array_common_count($names, $compare) .PHP_EOL;


//Can also be written as:
// var_dump(array_has_value('Bob', $names));
//	$count = 0;
// 	foreach($array1 as $value){
	//if (array_has_value($value,$array2)){
		//$count++;
	//}
//}
	//return $count:
//}

//var_dump(array_common_count($names, $compare));




//$query = 'Tina'

//$results = array_search($query, $names);

//if ($result) {
	//echo $names[$results];
//} elseif 
//	echo "False"