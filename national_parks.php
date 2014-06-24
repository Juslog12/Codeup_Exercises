<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'justin', 'Maslog12');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


function getUsers() {
    // Bring the $dbc variable into scope somehow

    return $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC);
}

?>