<?php
   include("config.php");
   include("session.php");
  session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['ausername']);
      $mypassword = mysqli_real_escape_string($con,$_POST['apass']); 
      
      $sql = "SELECT A_id FROM admin WHERE A_email = '$myusername' and A_pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("ausername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: admin.html");
        //  exit();
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>