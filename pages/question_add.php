<?php 
session_start();
error_reporting(0);
include('../includes/dbcon.php');

	$question = $_POST['question'];
	
	$id=$_SESSION['id'];

		$result=mysqli_query($con,"DELETE FROM answer WHERE faculty_id ='$id'")or die(mysqli_error($con));

		foreach($question as $val) 
		{	
			$answer = $_POST["answer$val"];
			$details = $_POST["details$val"];	
			$date = $_POST["date$val"];	

			mysqli_query($con,"INSERT INTO answer(question,answer,details,faculty_id,date_filed) VALUES('$val','$answer','$details','$id','$date')")or die(mysqli_error($con));
		}
	
	echo "<script type='text/javascript'>alert('Successfully updated questionaire!');</script>";
	echo "<script>document.location='skills.php'</script>";   

?>