<?php
	
	include "config.php";

	$h_id = $_POST['h_id'];
	$name = $_POST['name']; 
    $addr = $_POST['addr'];
	$phone = $_POST['phone']; 
	
	

	$q = mysqli_query($con,"insert into hospital values('$h_id','$name','$addr','$phone')")or die(mysqli_error($con));

	echo "<center><h2>Hospital Regristration Success</h2></center>";
	
?> 