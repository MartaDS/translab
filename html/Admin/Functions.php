<?php 
include 'database_connection.php';
include 'config.php';
$operation = $_GET['action'];

if($operation == 'timeline_add')
{
	$timestamp = $_POST['timestamp'];
	$dead_stopped = $_POST['dead_stopped'];
	$dead_resitting = $_POST['dead_resitting'];
	$loading = $_POST['loading'];

	$insert_query = "INSERT INTO `tbl_timeline`(`timestamp`, `deadStopped`, `deadResiting`, `loading`) VALUES ('".$timestamp."','".$dead_stopped."','".$dead_resitting."','".$loading."')";

	$insert = mysqli_query($con,$insert_query);

	header("Location:".base_url."Timeline.php");
}
elseif($operation == 'performance_add')
{
	$count = $_POST['count'];
	$interval = $_POST['interval'];
	$date = strtr($_REQUEST['date'], '/', '-');
	
	$date = date("Y-m-d", strtotime($date) );

	$insert_query = "INSERT INTO `tbl_performance`(`count`, `interval`, `date`) VALUES ('".$count."','".$interval."','".$date."')";

	$insert = mysqli_query($con,$insert_query);

	header("Location:".base_url."Performance.php");
}
elseif ($operation == 'overall_performance_add')
{
	$title = $_POST['title'];
	$value = $_POST['value'];
	$date = strtr($_REQUEST['date'], '/', '-');
	
	$date = date("Y-m-d", strtotime($date) );
	
	$insert_query = "INSERT INTO `tbl_overall_performance`(`title`, `value`, `date`) VALUES ('".$title."','".$value."','".$date."')";

	$insert = mysqli_query($con,$insert_query);

	header("Location:".base_url."OverallPerformance.php");
}
?>