<?php

include('../dist/includes/dbcon.php');
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

      // sending query
      mysqli_query($con,"update faculty set status='0' where faculty_id='$id'")or die(mysqli_error($con));  
      echo "<script type='text/javascript'>alert('Request Denied');</script>";
						  echo "<script>document.location='home.php'</script>";  
    }
    ?>