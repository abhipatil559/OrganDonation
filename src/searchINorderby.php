<?php

require_once("include/navbar.php");

?>

<?php
// $con=mysqli_connect("example.com","peter","abc123","my_db");
include "config.php";

$name = $_POST['name'];
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM organ where Name='$name'");

echo "<center><table border='1'>
<tr>
<th>Organ ID</th>
<th>Donor ID</th>
<th>Organ Name</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['D_id'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
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
background: #FFFFFF;
color: #000000;
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

</style>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      div{margin-bottom:10px}
      label
      {
      display: inline-block;
      width: 100px;
      text-align: left;
      }
    </style>
    <title></title>
</head>
<body>


<form action="orderby1.php" method="post" class="regform">
  <b>
 
<label for="organid">Enter Organ ID:</label>
     <input type="text" id="organid" name="ID"> <br><br>

     <label for="recid">Hospital ID:</label>
    <input type="text" id="hid" name="H_id"><br><br>

    <label for="recid">Name:</label>
    <input type="text" id="name" name="O_name"><br><br>

   
<br>
<br>
    </b>
  <input type="submit" value="Submit">
</form>



</body>
</html>