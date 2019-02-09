<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
</head>
<body>
<div class="container">

	<blockquote>
		<h1>Welcome</h1>
		<small>Login to your account</small>
	</blockquote>


	<div class="container">
		<form class="form-inline" >
			<div class="form-group">

				<label for="uid">Id:</label>
				<input type="number" name="uid" id="uid" class="form-control">

				<label for="pass">Password:</label>
				<input type="password" name="pass"  id="pass" class="form-control">

				<input type="button" name="sub" data-inline="true" onclick="fn();">

			</div>
		</form>
	</div>

</div>


<script type="text/javascript">
	
	var xhr;	

	function fn()
	{
		var id=document.getElementById("uid").value;
		var pass=document.getElementById("pass").value;
		
		xhr = new XMLHttpRequest();

		var data = "uid="+id+"&pass="+pass;
	
		
		xhr.onreadystatechange = function() {
		  if (this.readyState == 4 && this.status == 200)
		  {
		  	console.log("st"+this.status);
		  	console.log("rs"+this.readystate)
		  }
		}

		  console.log(xhr.status)
		  console.log(xhr.readystate)

		xhr.open('POST','auth.php', true);
		xhr.send(data);

	}


</script>

</body>
</html>