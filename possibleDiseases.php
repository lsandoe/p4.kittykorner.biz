<?php

echo"here goes <hr><br>";
//print_r ($checkboxes);

$checkboxes = $_POST['symptoms'];

$criteria = Array();

foreach ($_POST['symptoms'] as $i)
	$criteria[] = $i . ' = 1';
	
$sql = "SELECT * FROM main";
if (count($criteria))
	$sql .= " WHERE " . implode(' AND ', $criteria);
	
$sql = $sql . ";"; 

echo $sql;
	
?>



