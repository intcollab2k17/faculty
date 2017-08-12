<?php 

include('../dist/includes/dbcon.php');

	$announcement = $_POST['announcement'];
	$date = date("Y-m-d H:i");

	mysqli_query($con,"INSERT INTO announcement(announcement,date_posted) VALUES('$announcement','$date')")or die(mysqli_error());  
	
	 $query=mysqli_query($con,"select * from faculty where status='1' and active='1'")or die(mysqli_error($con));
          while($row=mysqli_fetch_array($query))
          {
          	$contact=$row['contact'];
          	
			//echo "<script>document.location='https://rest.nexmo.com/sms/json?api_key=d8cdf690&api_secret=c7d20c5fa1c0ee6e&to=$contact&from=Lee&text=$announcement'</script>";	 
          }
	
	
	echo "<script type='text/javascript'>alert('Successfully posted new announcement!');</script>";
	echo "<script>document.location='announcements.php'</script>";  

?>


	