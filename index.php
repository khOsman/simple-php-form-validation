<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

	<div class="formWrapper">
		<h1>Registration Form</h1>
		<h3>Anyone can join here!!!</h3>

		<form action="registration_form.php" method="POST">

			<p>First Name :<input type="text" name="fName" required="1"></p>
			<p></p>
			<p>Last Name :<input type="text" name="lName" required="1"></p>
			<p></p>
			<p>Your Email :<input type="Email" name="email" required="1"></p>
			<p></p>
			<p>Your Pass :<input type="Password" name="pass" required="1"></p>
			<p><input id="btn" type="submit" value="Submit"></p>
		
		</form>
		
	</div>
	
	

</body>
</html>