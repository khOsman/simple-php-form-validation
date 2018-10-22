<?php
	function check_input($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Completed</title>
</head>
<body>

<?php
		$fName= check_input( $_POST['fName']);
		$lName= check_input( $_POST['lName']);
		$email= check_input( $_POST['email']);
		$pass =  check_input( $_POST['pass']);

		$data = array($fName,$lName,$email,$pass);

		//open the file
		$file = fopen('formData.csv', 'a');

		//save data
		fputcsv($file, $data);

		//close the file
		fclose($file);

		echo "<p>Your data is saved - Thanks</p>";
		echo "<p>First Name - $fName </p>";
		echo "<p>Last Name - $lName </p>" ;
		echo "<p>Your Email -  $email</p>";
		echo "<p>Your Pass :)</p>";

?>

<p><a href="index.php">Go back</a></p>

</body>
</html>