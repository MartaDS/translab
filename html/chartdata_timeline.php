<?php 

/*
** Get Timeline chart data from Client JSON File
**
*/

$jsonData = file_get_contents("http://devtransfaction.oenoverse.com/chartdata/timeline.txt");
$jsonData = str_replace("\\","", $jsonData);
$jsonData = substr($jsonData, 1);
$jsonData = substr_replace($jsonData, "", -1);
$jsonData = json_decode($jsonData,1);

$timeline_data = array();

foreach ($jsonData['Data'] as $key => $value) {
	$timestring = 
	$timeline_data[$key]['Dead Stopped'] =  $value['_deadStopped'];
	$timeline_data[$key]['Dead Resiting'] =  $value['_deadResiting'];
	$timeline_data[$key]['Loading'] =  $value['_deadStopped'];
	$timeline_data[$key]['category'] =  date('Y-m-d',strtotime($value['_timeStamp']));
}
echo json_encode($timeline_data);

/*
** Get Timeline chart data from Admin Panel
**
*/

/*
include 'Admin/database_connection.php';
$query = 'SELECT * FROM tbl_timeline WHERE status = 1';
$timeline_data = mysqli_query($con,$query);

$return = array();
$count = 0;
while($data = mysqli_fetch_assoc($timeline_data))
{
	$timestamp = strtotime($data['timestamp']);

	$return[$count]['Dead Stopped']  =  $data['deadStopped'];
	$return[$count]['Dead Resiting'] =  $data['deadResiting'];
	$return[$count]['Loading']       =  $data['_loading'];
	$return[$count]['category']      =  date('Y-m-d',$timestamp);

	$count++;
}
echo json_encode($return);*/
?>