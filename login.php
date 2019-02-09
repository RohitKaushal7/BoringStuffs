<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>


<body style="background: none;">
<div class="container">

	<blockquote>
		<h1>Welcome</h1>
		<small>Login to your account</small>
	


	<div class="container">
		<form class="form-inline" method="get" action="auth.php" >
			<div class="form-group">

				<label for="uid">Id:</label>
				<input type="email" required name="uid" id="uid" class="form-control">

				<label for="pass">Password:</label>
				<input type="password" name="pass" required  id="pass" class="form-control">

				<input type="submit" class="btn btn-success" name="sub">

			

			</div>
			</blockquote>
		</form>
	</div>

</div>


</body>
</html>