<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<link rel="stylesheet" type="text/css" href="../../bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<div style="position: fixed; top: 100px; font-family: montserrat; font-weight: 600; left: 100px; color: white; font-size: 8em; text-shadow: 1px 1px 3px #333a;">
		<span>Sign Up</span><br>
		<span style="font-size: 0.4em; transform:translate(100px,-400px);">create your account</span>
	</div>


<div class="container cvr">

	
	
	<blockquote>
		
		<h1>Sign up</h1>
		<hr color=red;>
		<br>
		<div class="container box">
			<form id="myform" action="regprocess.php" method="get"  class="form-inline">

					<fieldset> <legend>Your Details</legend>
						<br><label for="uname">Name:</label><br>	
						<input type="text" class="form-control" name="uname" id="uname"
						style="width: 40%; min-width: 400px;"> <br>

						<br><label for="addr">Address:</label><br>	
						<input type="text" class="form-control" name="addr" id="addr" style="width: 70%; min-width: 400px;">

					</fieldset> <br><br><br>



					<fieldset>	<legend>Contact Information</legend>
						<br><label for="mob">Mobile No.</label><br>	
						<input type="phone" style="width: 40%; min-width: 400px;" class="form-control" name="mob" id="mob">							
						<br><label for="email">Email:</label><br>	
						<input type="email" style="width: 40%; min-width: 400px;" class="form-control" name="email" id="email"> <br>

						<br><label for="pass">Password:</label><br>	
						<input type="password" style="width: 40%; min-width: 400px;" class="form-control" name="pass" id="pass">

						<br><label for="cpass"> Confirm Password:</label><br>	
						<input type="password" style="width: 40%; min-width: 400px;" class="form-control" onchange="checkpasslive();" name="cpass" id="cpass"> <span id="err">Paswords didn't match</span>
					</fieldset>

						<label for="pic">DP:</label><br>	
						<input type="file" class="form-control" name="pic" id="pic">
						<br>

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