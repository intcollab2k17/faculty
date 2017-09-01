<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$membership = $_POST['membership'];
	$cid = $_POST['id'];
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update membership set membership_org='$membership[$i]' where membership_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	echo "<script>document.location='skills.php'</script>";   
?>	