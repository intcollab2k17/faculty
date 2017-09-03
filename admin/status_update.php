<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $status = $_POST['status'];

 mysqli_query($con,"UPDATE faculty SET inactive='$status' where faculty_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated faculty status!');</script>";
	echo "<script>document.location='faculty.php'</script>";
 } 

