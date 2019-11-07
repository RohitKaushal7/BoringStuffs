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

	echo '

			<div style="color: #3f2; font-size: 5em; display: flex; justify-content: center;align-items: center; height: 650px; font-family: montserrat,roboto,arial;"> Success</div>

		';
	header("refresh:2; url=login.html");

	}

	else
		echo "fail";

	





?>