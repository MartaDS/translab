<?php 
include 'config.php';
if($_POST)
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == Admin_Username && $password == Admin_Password)
	{
		header("Location:".base_url."addTimeline.php");
	}
	else
	{	
		header("Location:".base_url."Login.php?err=1");
	}
}

?>