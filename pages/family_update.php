<?php 
session_start();
include('../includes/dbcon.php');
	$flast = $_POST['flast'];
	$ffirst = $_POST['ffirst'];
	$fmiddle = $_POST['fmiddle'];
	$mlast = $_POST['mlast'];
	$mfirst = $_POST['mfirst'];
	$mmiddle = $_POST['mmiddle'];
	$id=$_SESSION['id'];
	
	mysqli_query($con,"update family set flast='$flast',ffirst='$ffirst',fmiddle='$fmiddle',mlast='$mlast',mfirst='$mfirst',mmiddle='$mmiddle' where faculty_id='$id'")or die(mysqli_error($con));  
	echo "<script type='text/javascript'>alert('Successfully updated family details!');</script>";
	echo "<script>document.location='family.php'</script>";   
	
	
?>