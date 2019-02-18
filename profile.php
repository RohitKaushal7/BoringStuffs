<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" type="text/css" href="../../fa-web\css/all.min.css">
	<script src="../../jquery.min.js"></script>

	<?php
		$id=$_GET['id'];

		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con,'hack3');


		$find = "select * from users where  id = $id";
		$res = mysqli_query($con,$find);
		$row = mysqli_fetch_assoc($res);
		$pfind= "select * from products , users where users.id=products.id and users.id=".$row['id']." ";

		$pro = mysqli_query($con,$pfind);


	?>



</head>
<body>
<div class="ext container">

<header>

	<div class="container">

		<h1 style="display: inline-block; color: #009688"><?php echo $row['name'] ?><small style="color: #dc143c">  Profile</small></h1>
	</div>


</header>

<div class="container cont">
	
	<div class="row">
		<div class="col-md-1 data">
			<h5 class="det"><small># </small><?php echo $row['id'] ?></h5 class="det">
		</div>
		<div class="col-md-5 data">
			<h5 class="det"><small>Name </small><?php echo $row['name'] ?></h5 class="det">
		</div>
		
	</div>

	<div class="row">
		<fieldset> <legend>Contact details</legend>
		<div class="col-md-3 data">
			<h5 class="det"><small> Mobie No.</small><?php echo $row['mob'] ?></h5 class="det">
		</div>
		<div class="col-md-5 data">
			<h5 class="det"><small>email </small><?php echo $row['email'] ?></h5 class="det">
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-8 data">
			<h5 class="det"><small>Address</small><?php echo $row['addr'] ?></h5>
		</div>
	</div>
	</fieldset>

	<fieldset> <legend>Products</legend>

		<div class="item-box">
			
			<?php
				if(mysqli_num_rows($pro)==0)
				{
			?>

				<blockquote><h1>Nothing Here</h1></blockquote>

			<?php }  else { 

				while($prod = mysqli_fetch_assoc($pro))
				{

				?>

				<div class="item" style="background:url(./pics/<?php echo $prod['ppic']?>); background-size: cover;">
				<div class="details">
					<h4> <?php echo $prod['pname'] ?> </h4>
					<p> <?php echo $prod['pdetails'] ?> </p>
					<div class="price">&#8377; <?php echo $prod['pprice'] ?> </div>

					
					<a href="delete.php?id=<?php echo $prod['pid'] ?>&uid=<?php echo $row['id'] ?>"><i class="fa fa-trash fa-lg" ></i></a>

					</div>
				

			</div>


			<?php }  }?>



		</div>
		


	</fieldset>

</div>


</div>
</body>
</html>