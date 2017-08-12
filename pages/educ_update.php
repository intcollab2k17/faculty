<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];


	$school = $_POST['school'];
	$level = $_POST['level'];
	$grad = $_POST['grad'];
	$eid = $_POST['eid'];
	
	$i=0;
	foreach ($eid as $value)
	{

		mysqli_query($con,"update educ set level='$level[$i]',school='$school[$i]',grad='$grad[$i]' where educ_id='$value'")or die(mysqli_error($con));  
		$i++;
	}
	echo "<script>document.location='educ.php'</script>";   
	
?>