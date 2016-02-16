<?php
//ignore this piece for now, it's not actually located in this directory (temporary)
include 'resources/db_connect.php';

// get all columns from all locations in the database
$result = $mysqli->query("SELECT * FROM locations");

// shove it all into an associative array
$rows = array();
while( $row = $result->fetch_array(MYSQLI_ASSOC) ) {
	$rows[] = $row;
}

// write all of it to the page as JSON
//you should be able to see all this data
header('Content-Type: application/json');
echo json_encode($rows);

?>