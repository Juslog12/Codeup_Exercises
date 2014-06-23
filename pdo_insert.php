<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'justin', 'Maslog12');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

/*$query = 'CREATE TABLE national_parks 
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    description TEXT NOT NULL, 
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres INT NOT NULL,
    PRIMARY KEY (id)
)';


$dbc->exec($query);
*/

$national_parks = 
[
    ['name' => 'Acadia', 'description' => 'There are freshwater, estuary, forest, and intertidal habitats.',  'location' => 'Maine', 'date_established' =>'1919-02-22', 'area_in_acres' => '47389.67'],
    ['name' => 'American Samoa', 'description' => 'The area is also home to flying foxes, brown boobies, sea turtles, and 900 species of fish.',  'location' => 'America Samoa', 'date_established' =>'1988-10-31', 'area_in_acres' => '9000.00'],
    ['name' => 'Arches',  'description' => 'In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. ', 'location' => 'Utah', 'date_established' =>'1971-11-12', 'area_in_acres' => '76518.98'],
    ['name' => 'Badlands', 'description' => 'It has the world richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes.',  'location' => 'South Dakota', 'date_established' =>'1978-11-10', 'area_in_acres' => '242755.94'],
    ['name' => 'Big Bend', 'description' => 'Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river.',  'location' => 'Texas', 'date_established' =>'1944-06-12', 'area_in_acres' => '801163.21'],
    ['name' => 'Biscayne', 'description' => 'Threatened animals include the West Indian Manatee, American crocodile, various sea turtles, and peregrine falcon.',  'location' => 'Florida', 'date_established' =>'1980-06-26', 'area_in_acres' => '172924.07'],
    ['name' => 'Black Canyon', 'description' => 'The canyon features incredibly steep descents, and is a popular site for river rafting and rock climbing. The deep, narrow canyon, made of gneiss and schist, is often in shadow and therefore appears black.',  'location' => 'Colorado', 'date_established' =>'1999-10-21', 'area_in_acres' => '32950.03'],
    ['name' => 'Bryce Canyon',  'description' => 'The unique area has hundreds of tall sandstone hoodoos formed by erosion. ', 'location' => 'Utah', 'date_established' =>'1928-02-25', 'area_in_acres' => '35835.08'],
    ['name' => 'Canyonlands', 'description' => 'There are rock pinnacles and other naturally sculpted rock formations, as well as artifacts from Ancient Pueblo peoples.',  'location' => 'Utah', 'date_established' =>'1964-09-12', 'area_in_acres' => '337597.83'],
    ['name' => 'Capitol Reef', 'description' => 'The parks Waterpocket Fold is a 100 mile monocline that exhibits the Earth diverse geologic layers.',  'location' => 'Utah', 'date_established' =>'1971-12-18', 'area_in_acres' => '241904.26']  
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, description, location, date_established, area_in_acres) VALUES (:name, :description, :location, :date_established, :area_in_acres )');

foreach ($national_parks as $park) 
{
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);
    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established',  $park['date_established'],  PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres',  $park['area_in_acres'],  PDO::PARAM_STR);

    $stmt->execute();

}


?>