<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$recognition = $_POST['recognition'];
	$cid = $_POST['id'];
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update recognition set recognition='$recognition[$i]' where recognition_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	echo "<script>document.location='skills.php'</script>";   
?>	