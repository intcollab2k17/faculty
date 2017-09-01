<?php 
session_start();
include('../includes/dbcon.php');
	$fid = $_POST['fid'];
	$last = $_POST['last'];
	$first = $_POST['first'];
	$middle = $_POST['middle'];
	$relationship = $_POST['relationship'];
	$id=$_SESSION['id'];
	$i=0;
	foreach ($relationship as $rel)
	{
		//echo $last[$i];
		mysqli_query($con,"update family set last='$last[$i]',first='$first[$i]',middle='$middle[$i]' where fam_id='$fid[$i]'")or die(mysqli_error($con));  
		$i++;
	}
	echo "<script type='text/javascript'>alert('Successfully updated family details!');</script>";
	echo "<script>document.location='family.php'</script>";   
	
	
?>