<?php 
session_start();
include('../includes/dbcon.php');

	$work = $_POST['agency'];
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO work_exp(faculty_id,work_exp) 
		VALUES('$id','$work')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added work experience!');</script>";
	echo "<script>document.location='profile.php'</script>";   

?>