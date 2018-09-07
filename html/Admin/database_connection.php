<?php
/**
* db_config.php
* MySQL connection parameters for 140dev Twitter database server
* Fill in these values for your database
*/

//date_default_timezone_set('Asia/Riyadh');

$db_host = 'localhost';
$db_user = 'root';
$db_password = '123456';
$db_name = 'translab'; 

$con = mysqli_connect($db_host,$db_user,$db_password,$db_name);

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?> 