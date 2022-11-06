 <?php
	
	include "config.php";

	$d_id = $_POST['d_id'];
	$name = $_POST['name']; 
	$b_group = $_POST['blood_group']; 
	$age = $_POST['age'];
	$gender = $_POST['gender'];
    $disease = $_POST['disease'];
	
	
	if($d_id !=''&& $name !=''&& $age  !=''&& $b_group !='')
		{

		$q = mysqli_query($con,"insert into donor values('$d_id','$name','$b_group','$age','$gender','$disease')")or die(mysqli_error($con));
		echo "<center><h2>Donor Regristration Success</h2></center>";
		//  To redirect form on a particular page
		
		header("Location:organ.php");
		}
		else{
		?>    <span> <?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
		}


?>  




