<?php

require_once("include/navbar.php");

?>


<?php
// $con=mysqli_connect("example.com","peter","abc123","my_db");
include "config.php";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM hospital");

echo "<center><table border='1'>
<tr>
<th>Hospital ID</th>
<th>Hospital Name</th>
<th>Address</th>
<th>Phone</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['H_id'] . "</td>";
echo "<td>" . $row['H_name'] . "</td>";
echo "<td>" . $row['H_address'] . "</td>";
echo "<td>" . $row['H_phone'] . "</td>";
echo "</tr>";
}
echo "</table><center>";

mysqli_close($con);
?>

<html>
<head>
<title>...</title>
<style type="text/css">
table {
margin: 15px;


}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: -5em;
background: #FF0000;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;

}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: -3em;
border: 1px solid #DDD;
font-weight: bold;

}

table {
  width: 70%;
}

th {
  height: 70px;
}