<?php


	$uname = $_GET['uname'];
	$addr = $_GET['addr'];
	$mob = $_GET['mob'];
	$email = $_GET['email'];
	$pass = $_GET['pass'];
	$pic = $_GET['pic'];

	

	$con=mysqli_connect('localhost','root','');

	mysqli_select_db($con,'hack3');

	if($con)
	{
		$find = "insert into users values('','$uname','$pass','$email','$mob','$addr','$pic')";

	$res = mysqli_query($con,$find);

	echo "success";
	}

	else
		echo "fail";

	





?>