<?php

$books = array(
     array('name' => 'The Hobbit',
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    array('name' => 'Game of Thrones',
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
     array('name' => 'The Catcher in the Rye',
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
     array('name' => 'A Tale of Two Cities',
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $book) {
	if ($book['published'] > 1950) {
    echo "{$book['name']}, published in {$book["published"]}, was written by {$book["author"]}, and has {$book["pages"]} pages.\n";
	}
}

// instructors version

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $book => $properties) {
	echo $book  . PHP_EOL;
	foreach ($properties as $property => $value) {
		echo "{$property}: {$value}\n";
	}
}