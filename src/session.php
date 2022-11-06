<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select A_id from admin where A_email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['A_email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:adminlogin.html");
      die();
   }
?>