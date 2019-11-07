<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="add.css">
	<link rel="stylesheet" type="text/css" href="../../fontawesome-free-5.6.3-web\css/all.min.css">
	<script src="../../jquery.min.js"></script>

<?php
	$uid=$_GET['uid'];
	$pass=$_GET['pass'];

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'hack3');

	$find = "select * from users where  id = $uid";
	$res = mysqli_query($con,$find);
	$row= mysqli_fetch_assoc($res);



?>

</head>
<body>

	<header>

		<div class="container">

		<h1 style="display: inline-block;">Add Product<small>  <?php echo $row['name'] ?></small></h1>
	</div>


</header>

<div class="container cont">
	<form id="addform" class="form-inline" action="addprocess.php">
		<fieldset>	<legend>Product Details</legend>

			<div class="form-group">
				<label for="pname">Product Name</label><br>
				<input type="text" id="pname" name="pname" class="form-control" style="min-width: 400px;"><br><br>

				<label for="det">Details..</label><br>
				<input type="text" id="det" name="det" class="form-control" style="min-width: 600px;"><br><br>

				<label for="pprice">Price (&#8377;)</label><br>
				<input type="number" id="pprice" name="pprice" class="form-control" style="min-width: 100px;"><br><br>

				<label for="ppic">Picture...</label><br>
				<input type="file" id="ppic" name="ppic" class="form-control" style="min-width: 100px;"><br><br>

				<input type="button" name="bt" value="cancel" class="b btn btn-secondry btn-lg" onclick="history.back();">

				<input type="password" name="pass" value="<?php echo $pass; ?>" style="display: none;">

				<input type="number" name="uid" value="<?php echo $uid; ?>" style="display: none;">

				<input type="button" name="subb" value="Advertise" class="b btn btn-success btn-lg" onclick="document.getElementById('addform').submit();" /> 				

			

			</div>
			
		</fieldset>
		
	</form>
</div>



</body>
</html>