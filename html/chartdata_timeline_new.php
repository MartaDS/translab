<?php

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
echo json_encode($timeline_data);die;
echo "<PRE>";print_r($jsonData);
?>