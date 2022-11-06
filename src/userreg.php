 <?php
	
	include "config.php";

	$name = $_POST['name'];
	$phone = $_POST['phone']; 
	$email = $_POST['email']; 
	$dob = $_POST['dob1'];
	$addr = $_POST['addr'];
	

	$q = mysqli_query($con,"insert into user values('','$name','$phone','$email','$dob','$addr')")or die(mysqlu_error($con));

	echo "<center><h2>Regristration Success</h2></center>";
	
?> 