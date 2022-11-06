<?php
include "config.php";
$o_id = $_POST['o_id'];
$d_id = $_POST['d_id']; 
$oname = $_POST['name']; 

if($d_id !=''&& $o_id !=''&& $oname  !='')
  {

  $q = mysqli_query($con,"insert into organ values('$o_id','$d_id','$oname')")or die(mysqli_error($con));
  echo "<center><h2>Donor Regristration Success</h2></center>";
  //  To redirect form on a particular page
  
  header("Location:admin.html");
  }
  else{
  ?>    <span> <?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
  }
?>  