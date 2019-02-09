<?php

	header('Content-type: application/json');

	include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/autoload.php';
	include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/db.php';

	
	$user = $_POST['uid'];
	$pass = $_POST['pass'];

	$con=mysqli_connect('localhost','root','');

	mysqli_select_db($con,'hack3');

	$find = "select * from users where  id = $user";

	$res=mysql_query($con,$find);

	if(mysqli_num_rows($res)==0)
	{
		http_response_code(404);
	}

	else
	{
		if($pass == $res['pass'])
			http_response_code(200);
		else
			http_response_code(500);
	}



?>