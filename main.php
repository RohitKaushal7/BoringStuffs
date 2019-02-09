<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../fontawesome-free-5.6.3-web\css/all.min.css">
	<script src="../../jquery.min.js"></script>

	<?php
		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con,'hack3');

		$qre = "select * from products";

		$res = mysqli_query($con,$qre);




	?>





</head>
<body>

<div class="ext">

	<header class="header">
		<div class="container">
			<h2>NITCAOLX <small>get what you want</small></h2>
			<div class="usr">
				<i class="fa fa-plus fa-lg"></i>
				<i class="fa fa-shopping-cart fa-lg"> </i>
				<span>Rohit Kaushal</span>
				<span class="dp"></span>
			</div>
		</div>


	</header>

	<div class="container cont">
		
		<h1>Products Available <small> to buy</small></h1>
	

		<div class="item-box">
			
		<!-- 	<div class="item">
				<div class="details">
					<h4>Sony SRS 10</h4>
					<p>Bluetooth speakers</p>
					<div class="price">&#8377; 2000</div>
				</div>
				<i class="fa fa-cart-plus fa-2x"></i>
			</div>
 -->

			<?php
				if(mysqli_num_rows($res)==0)
				{
			?>

				<blockquote><h1>Nothing Here</h1></blockquote>

			<?php }  else { 

				while($row = mysqli_fetch_assoc($res))
				{

				?>

				<div class="item" style="background:url(./pics/<?php echo $row['ppic']?>); background-size: cover;">
				<div class="details">
					<h4> <?php echo $row['pname'] ?> </h4>
					<p> <?php echo $row['pdetails'] ?> </p>
					<div class="price">&#8377; <?php echo $row['pprice'] ?> </div>
				</div>
				<i class="fa fa-cart-plus fa-2x"></i>
			</div>


			<?php }  }?>




			

		</div>
	</div>

	<footer>
		<div class="container">
			

		</div>

		
		

	</footer>

</div>


<script type="text/javascript">
		
	$(function(){

		$(".fa-cart-plus").click(function(){
			if($(this).parent().css("position")=="relative"){
					$(".item").css("filter","blur(2px)");
					$(this).parent().css({
						"position":"fixed",
						"z-index":"3",

						"top":"30%",
						"left":"20%",
						"transform": "scale(2)",
						"filter":"blur(0px)"
					});
			}

			else
			{
				$(".item").css("filter","blur(2px)");
					$(this).parent().css({
						"position":"relative",
						"z-index":"1",
						"top":"0",
						"left":"0",
						"transform": "scale(1)",
						"filter":"blur(0px)"
					});

					$(".item").css("filter","blur(0px)");

			}

		});

	});

</script>




</body>
</html>