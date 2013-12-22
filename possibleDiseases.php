<?php

$checkboxes = $_POST['symptoms'];

$criteria = Array();

foreach ($_POST['symptoms'] as $i)
	$criteria[] = $i . ' = 1';
	
$sql = "SELECT disease, description, howItSpreads, incubationPeriod, contagious, prevention, symptoms FROM main";
if (count($criteria))
	$sql .= " WHERE " . implode(' OR ', $criteria);
	
$sql = $sql . ";"; 

echo"The sql statement is presented below:<hr><br>";
echo $sql;
	
//connect to database
$con=mysqli_connect("localhost","stduser","stduser","p4_kittykorner_biz");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, $sql);

echo "<table border='1'>
<tr>
<th>Disease</th>
<th>Description</th>
<th>How it Spreads</th>
<th>Incubation Period</th>
<th>Is it Contagious?</th>
<th>Prevention</th>
<th>Symptoms</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['disease'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
  echo "<td>" . $row['howItSpreads'] . "</td>";
  echo "<td>" . $row['incubationPeriod'] . "</td>";
  echo "<td>" . $row['contagious'] . "</td>";
  echo "<td>" . $row['prevention'] . "</td>";
  echo "<td>" . $row['symptoms'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
		
?>



