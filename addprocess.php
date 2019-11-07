<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php

	$pname=$_GET['pname'];
	$det=$_GET['det'];
	$pprice=$_GET['pprice'];
	$ppic=$_GET['ppic'];
	$uid = $_GET['uid'];
	$pass = $_GET['pass'];

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'hack3');

	$add = "insert into products values('','$pname','$det',$pprice,'$ppic',$uid)";
	$res = mysqli_query($con,$add);
	
	if($res)
	{
		echo '

			<div style="color: #f41; font-size: 5em; display: flex; justify-content: center;align-items: center; height: 650px; font-family: montserrat,roboto,arial;"> Added Successfully</div>

		';
		header("refresh:2; url=main.php?uid=$uid&pass=$pass");
	}

	else
	{
		echo "error";
		header("refresh:2; url=main.php?uid=$uid&pass=$pass");
	}
?>

</head>
<body>

</body>
</html>