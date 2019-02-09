<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container cvr">
	
	<blockquote>
		
		<h1>Sign up</h1>
		<hr>
		<br>
		<div class="container ">
			<form id="myform" action="#" class="form-inline">

					<fieldset> <legend>Your Details</legend>
						<br><label for="uname">Name:</label><br>	
						<input type="text" class="form-control" name="uname" id="uname"
						style="width: 40%; min-width: 400px;"> <br>

						<br><label for="addr">Address:</label><br>	
						<input type="text" class="form-control" name="addr" id="addr" style="width: 70%; min-width: 400px;">

					</fieldset> <br><br><br>



					<fieldset>	<legend>Contact Information</legend>
						<br><label for="mob">Mobile No.</label><br>	
						<input type="phone" class="form-control" name="mob" id="mob">							
						<br><label for="email">Email:</label><br>	
						<input type="email" class="form-control" name="email" id="email"> <br>

						<br><label for="pass">Password:</label><br>	
						<input type="password" class="form-control" name="pass" id="pass">

						<br><label for="cpass"> Confirm Password:</label><br>	
						<input type="password" class="form-control" onchange="checkpasslive();" name="cpass" id="cpass"> <span id="err">Paswords didn't match</span>
					</fieldset>

						<label for="pic">DP:</label><br>	
						<input type="file" class="form-control" name="pic" id="pic">

						<input type="button" class="btn btn-success" name="subm" onclick="sub();" value="Submit">												
			</form>
		</div>

	</blockquote>

</div>

	<script type="text/javascript">
		
		var pass= document.getElementById("pass");
		var cpass= document.getElementById("cpass");
		var err= document.getElementById("err");
		var form= document.getElementById("myform")

		function sub()
		{
			pass=pass.value;
			cpass=cpass.value;

			if(pass!=cpass)
			{
				err.style.display="inline-block";

			}

			else
			{
				form.submit();
			}
		}


		function checkpasslive()
		{
			let passv=pass.value;
			let cpassv=cpass.value;
			

			if(passv!=cpassv)
			{
				cpass.style.background="#f669";

			}

			else
			{
				cpass.style.background="#0f08";				
			}
		}


	</script>



</body>
</html>