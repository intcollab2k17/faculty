<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$skill = $_POST['skill'];
	$cid = $_POST['id'];
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update skill set skill='$skill[$i]' where skill_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	echo "<script>document.location='skills.php'</script>";   
?>	