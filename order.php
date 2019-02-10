<?php
	

	$seller = $_GET['seller'];
	$buyer = $_GET['buyer'];
	$pid = $_GET['pid'];
	$pass = $_GET['pass'];

	

	$con=mysqli_connect('localhost','root','');

	mysqli_select_db($con,'hack3');

	$qre = "insert into orders values($buyer,$seller,$pid,'N')";

	$res = mysqli_query($con,$qre);

	echo '
			<div style="color: #3f2; font-size: 5em; display: flex; justify-content: center;align-items: center; height: 650px; font-family: montserrat,roboto,arial;"> Order Placed <br> Contact the seller..</div>

	';

	header("refresh:2; url=main.php?uid=".$buyer."&pass=".$pass."");






?>