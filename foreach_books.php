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
    echo "{$book['name']}, published in {$book["published"]}, was written by {$book["author"]}, and has {$book["pages"]} pages.\n";
}