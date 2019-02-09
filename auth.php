<?php

	
	$user = $_GET['uid'];
	$pass = $_GET['pass'];

	$con=mysqli_connect('localhost','root','');

	mysqli_select_db($con,'hack3');

	$find = "select * from users where  id = $user";

	$res=mysqli_query($con,$find);

	$row = mysqli_fetch_ASSOC($res);

	if(mysqli_num_rows($res)==0)
	{
		echo '

				Not Found


			';
			header('refresh:1; url=login.php');;
	}

	else
	{
		if($pass == $row['pass'])
			echo "welcome".$row['name'];
		else
			{
				echo '

						Wrong Password


					';
				header('refresh:1; url=login.php');
			}

	}



?>