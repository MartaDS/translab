<?php
$myfile = file_get_contents("http://devtransfaction.oenoverse.com/chartdata/arrival-distribution.txt");
$myfile = str_replace("\\","", $myfile);
$myfile = substr($myfile, 1);
$myfile = substr_replace($myfile, "", -1);
$myfile = json_decode($myfile,1);

$chartdata = $myfile['Data'];
$pos_arr=array(); 
$neg_arr=array();

/**********************************************************/
// The chartdata is having negative and positive intervals 
// Make two separate arrays to store negative and positive intervals
// to make it easy negative intervals are converted explicitly to positive

foreach($chartdata as $key => $val)
{
    ($val['_interval']<0) ?  $neg_arr[$key]['interval']=abs($val['_interval']) : $pos_arr[$key]['interval']=$val['_interval'];
    ($val['_interval']<0) ?  $neg_arr[$key]['count']=$val['_count'] : $pos_arr[$key]['count']=$val['_count'];
}

/***********************************************************/
//we have to group interval into 30 mins 
//so if maximum number is not divisible by 30 than we are finding next number divisible by 30
$max_negative = max(array_column($neg_arr, 'interval'));
$max_positive = max(array_column($pos_arr, 'interval'));


if($max_negative %30 != 0) {
  $max_negative += 30 - ($max_negative % 30);
}

if($max_positive %30 != 0) {
  $max_positive += 30 - ($max_positive % 30);
}
// echo "<PRE>";print_r($pos_arr);die;
/**********************************************************/
// putting zero if no interval found
// we are having interval like 10,40,50,....
// so make 10 , 20 , 30 , and for missed interval put zero

$key_arr = array_column($neg_arr, 'interval');

for ($i=10; $i <= $max_negative ; $i+=10)
{ 
	if(array_search($i,$key_arr) === FALSE)
	{
		$neg_arr[] = array('interval'=>$i,'count'=>0);
	}
}
//sort by interval
foreach ($neg_arr as $key1 => $row1) {
    $sort_negarr1[$key1]  = $row1['interval'];
}

array_multisort($sort_negarr1, SORT_ASC, $neg_arr);



$key_arr_positive = array_column($pos_arr, 'interval');

for ($i=0; $i <= $max_positive ; $i+=10)
{ 
	if(array_search($i,$key_arr_positive) === FALSE)
	{
		$pos_arr[] = array('interval'=>$i,'count'=>0);
	}
}
//sort by interval
foreach ($pos_arr as $key2 => $row2) {
    $sort_posarr1[$key2]  = $row2['interval'];
}

array_multisort($sort_posarr1, SORT_ASC, $pos_arr);
//echo "<PRE>";print_r($pos_arr);


/**********************************************************/

$count = 0;
$finalarr = array();
$sum = 0;

for($i=0;$i<=count($neg_arr);$i++)
{
	if($count < 2)
	{
		$sum += $neg_arr[$i]['count'];
		$count++;
	}
	else
	{
		$sum += $neg_arr[$i]['count'];
		$count++;
		$finalarr[$neg_arr[$i]['interval']] = $sum;
		$sum = 0;
		$count = 0;
	}
}
//echo "<PRE>";print_r($finalarr);die;

$count_positive = 0;
$finalarr_positive = $zero_interval = array();
$sum_positive = 0;



for($i=0;$i<=count($pos_arr);$i++)
{
	//echo $pos_arr[$i]['interval'];die;
	if($i == 0)
	{
		$zero_interval[0] = $pos_arr[$i]['count'];
		continue; 
	}
	if($count_positive < 2)
	{
		$sum_positive += $pos_arr[$i]['count'];
		$count_positive++;
	}
	else
	{
		$sum_positive += $pos_arr[$i]['count'];
		$count_positive++;
		$finalarr_positive[$pos_arr[$i]['interval']] = $sum_positive;
		$sum_positive = 0;
		$count_positive = 0;
	}
}
//echo "<PRE>";print_r($neg_arr);
/**********************************************************/
//changing the final negative array to negative and sort it back to decending

krsort($finalarr);

$finalarr_negative = array();
foreach ($finalarr as $fkey => $fvalue) {
	$neg_key = -1 * abs($fkey);
	$finalarr_negative[$neg_key] = $fvalue;	
}


// echo "<PRE>";print_r($zero_interval);


$chartdata = array();

foreach ($finalarr_negative as $key => $value) {
	$chartdata[] = array('category'=>$key,'column-1'=>$value);
}
foreach ($zero_interval as $key => $value) {
	$chartdata[] = array('category'=>$key,'column-1'=>$value);
}
foreach ($finalarr_positive as $key => $value) {
	$chartdata[] = array('category'=>$key,'column-1'=>$value);
}
echo json_encode($chartdata);
?>