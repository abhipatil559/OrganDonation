<?php

require_once("include/navbar1.php");

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
  <body style="background-color: rgb(211, 214, 214); background-image:url(donate.png);; background-size:    cover;                      /* <------ */
  background-repeat:   no-repeat;
  background-position: center center; background-size: contain; height: 800px;">
    

<div class="form-center">
<form action="userreg.php" method="post" class="regform">

  <b>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>

  <label for="phone">Phone:</label>
  <input type="text" id="phone" name="phone"><br><br>


  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="dob1">Date Of Birth:</label>
  <input type="date" id="dob1" name="dob1"><br><br>

  <label for="addr">Address:</label>
  <textarea name="addr" id="addr" cols="50" rows="5"></textarea>
<br>
<br>
</b>
  <input type="submit" value="Submit">
</form>
</div>























    
    
</body>
</html>
