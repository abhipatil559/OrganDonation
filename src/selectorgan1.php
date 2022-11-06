
<?php
include "config.php";
$id = $_POST['ID'];
$r_id = $_POST['R_id']; 
$name = $_POST['O_name']; 


if($id !=''&& $r_id !='')
  {

  $q = mysqli_query($con,"insert into requestorgan values('$id','$r_id','$name')")or die(mysqli_error($con));
  $q2= mysqli_query($con,"delete from organ where ID='$id'")or die(mysqli_error($con));
  //  To redirect form on a particular page
  
  header("Location:admin.html");
  }
  else{
  ?>    <span> <?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
  }
?>  




