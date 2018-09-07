<?php 
include 'Admin/database_connection.php';
if(!empty($_POST['start_date']) && isset($_POST['start_date']) && !empty($_POST['end_date']) && isset($_POST['end_date']))
{	
	$start_date = date("Y-m-d", strtotime(strtr($_POST['start_date'], '/', '-')) );
	$end_date = date("Y-m-d", strtotime(strtr($_POST['end_date'], '/', '-')) );

	$query = 'SELECT * FROM tbl_overall_performance WHERE `date` >= "'.$start_date.'" AND `date` <= "'.$end_date.'" AND status = "1"  ';
}
else
{
	$query = 'SELECT * FROM tbl_overall_performance WHERE status = 1';
}
//echo $query;
$timeline_data = mysqli_query($con,$query);


$return = array();
$count = 0;
while($data = mysqli_fetch_assoc($timeline_data))
{
	$return[$count]['title']  =  $data['title'];
	$return[$count]['value'] =  $data['value'];
	$count++;
}
echo json_encode($return);
?>