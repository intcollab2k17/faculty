<?php 
session_start();
include('../dist/includes/dbcon.php');

$month=date("m");
$year=date("Y");

	$query = mysqli_query($con,"select COUNT(*) as count,DATE_FORMAT(last_update,'%b') as month from faculty where YEAR(last_update)='$year' and (inactive='Active' and status='1') group by MONTH(last_update)") or die(mysqli_error($con));

	$category = array();
	//$category['name'];

	$series1 = array();
	$series1['name'] = 'Updated PDS';

	while($r = mysqli_fetch_array($query)) {
		
	    //$count=$r['total'];
	    $category['name'][] =$r['month'];
	    $category['data'][] =$r['month'];
	    $series1['data'][] = $r['count'];

}

$result = array();
array_push($result,$category);
array_push($result,$series1);
//array_push($result,$series2);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);

?> 
