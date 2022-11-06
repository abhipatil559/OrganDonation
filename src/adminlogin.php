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
      width: 130px;
      text-align: left;
      }
    </style>
  </head>
  
<body>  
  <div class= "form-center">  

      <form class="regform" name="f1" action = "auth.php" onsubmit = "return validation()" method = "POST" class="regform" autocomplete="off">  
          <p>  
              <label for="user"> UserName(Email): </label>  
              <input type = "text" id ="user" name  = "user" placeholder="Enter Email" />  
          </p>  
          <p>  
              <label for="pass"> Password: </label>  
              <input type = "password" id ="pass" name  = "pass" placeholder="Enter Password" />  
          </p>  
          <p>     
              <input type =  "submit" id = "btn" value = "Login" />  
          </p>  
      </form>  
  </div>  
  <!-- // validation for empty field    -->
  <script>  
          function validation()  
          {  
              var id=document.f1.user.value;  
              var ps=document.f1.pass.value;  
              if(id.length=="" && ps.length=="") {  
                  alert("User Name and Password fields are empty");  
                  return false;  
              }  
              else  
              {  
                  if(id.length=="") {  
                      alert("User Name is empty");  
                      return false;  
                  }   
                  if (ps.length=="") {  
                  alert("Password field is empty");  
                  return false;  
                  }  
              }                             
          }  
      </script>  
</body>     
</html>
