



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
      width: 50px;
      text-align: left;
      }
    </style>
  </head>
  <body style="background-color: rgb(159, 218, 218); background-image:url(download.png)">
    
  <div class="form-center">
<form action="organreg.php" method="post" class="regform">
  <b>
  <label for="name">O_id:</label>
  <input type="text" id="o_id" name="o_id"><br><br>
  
  <label for="d_id">D_id:</label>
  <input type="text" id="d_id" name="d_id"><br><br>
  
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">

<br>
<br>
    </b>
  <input type="submit" value="Submit" name="submitbutton">
</form>
    </div>

    
</body>
</html>