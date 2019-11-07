<?php

	
	$user = $_GET['uid'];
	$pass = $_GET['pass'];

	$con=mysqli_connect('localhost','root','');

	mysqli_select_db($con,'hack3');

	$find = "select * from users where  email = '$user'";
	$res = mysqli_query($con,$find);


	if( mysqli_num_rows($res) == 0)
	{
		echo '

				<div style="color: #f41; font-size: 5em; display: flex; justify-content: center;align-items: center; height: 650px; font-family: montserrat,roboto,arial;"> Not Found</div>


			';
			header('refresh:2; url=login.html');;
	}

	else
	{
		$row = mysqli_fetch_assoc($res);
		if($pass == $row['pass'])
			{
				
				header('refresh:0.1; url=main.php?uid='.$row['id'].'&pass='.$pass);
			}
		else
			{
				echo '

						<div style="color: #f41; font-size: 5em; display: flex; justify-content: center;align-items: center; height: 650px; font-family: montserrat,roboto,arial;"> Wrong Password</div>


					';
				header('refresh:2; url=login.html');
			}

	}



?>