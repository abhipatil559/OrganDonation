<?php

require_once("include/navbar.php");

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Life After Death :: Organ Donation</title>
    <link rel="stylesheet" href="cssindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      div{margin-bottom:10px}
      label
      {
      display: inline-block;
      width: 100px;
      text-align: left;
      }
    </style>
  </head>
  <body style="background-color: rgb(159, 218, 218); background-image:url(download.png)">
   
<div class="form-center">
<h2>Receiver Registration</h2><br>
<form action="receiver1.php" method="post" class="regform">
  <b>
  <label for="r_id">R_id:</label>
  <input type="text" id="r_id" name="r_id"><br><br>
  
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  
  <label for="blood group">Blood group:</label>
  <input type="text" id="blood group" name="blood group"><br><br>

  <label for="age">Age:</label>
  <input type="text" id="age" name="age"><br><br>

  <label for="gender">Gender:</label>
  <input type="text" id="gender" name="gender"><br><br>

  <label for="disease">Disease:</label>
  <input type="text" id="disease" name="disease" >
<br>
<br>
</b>
  <input type="submit" value="Submit">
</form>
</div>
























    
    
</body>
</html>