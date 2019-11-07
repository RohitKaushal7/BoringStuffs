<?php
	
		$id=$_GET['id'];
		$uid=$_GET['uid'];

		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con,'hack3');


		$find = "delete from products where  pid = $id";
		$res = mysqli_query($con,$find);
		header("refresh:0.1; url=profile.php?id=$uid");
		


?>