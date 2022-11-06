<?php
	
	include "config.php";

	$r_id = $_POST['r_id'];
	$name = $_POST['name']; 
	$b_group = $_POST['blood_group']; 
	$age = $_POST['age'];
	$gender = $_POST['gender'];
    $disease = $_POST['disease'];
	
	if($r_id !=''&& $name !=''&& $b_group  !='')
  {

	$q = mysqli_query($con,"insert into receiver values('$r_id','$name','$b_group','$age','$gender','$disease')")or die(mysqli_error($con));

	echo "<center><h2>Receiver Regristration Success</h2></center>";
  //  To redirect form on a particular page
  
  header("Location:selectorgan.php");
  }
  else{
  ?>    <span> <?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
  }
	
?> 