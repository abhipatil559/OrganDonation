<?php
include "config.php";
$id = $_POST['ID'];
$h_id = $_POST['H_id']; 
$name = $_POST['O_name']; 


if($id !=''&& $h_id !='')
  {

  $q = mysqli_query($con,"insert into orderby values('$id','$h_id','$name')")or die(mysqli_error($con));
  $q2= mysqli_query($con,"delete from organ where ID='$id'")or die(mysqli_error($con));
  //  To redirect form on a particular page
  
  header("Location:admin.html");
  }
  else{
  ?>    <span> <?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
  }
?>  
