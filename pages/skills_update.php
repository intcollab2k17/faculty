<?php 
session_start();
include('../includes/dbcon.php');

	$skills = $_POST['skills'];
	$language = $_POST['language'];
	$id=$_SESSION['id'];
	
	mysqli_query($con,"update faculty set skills='$skills',language='$language' where faculty_id='$id'")or die(mysqli_error($con));  
	echo "<script type='text/javascript'>alert('Successfully updated skills and language details!');</script>";
	echo "<script>document.location='skills.php'</script>";   
	
	
?>