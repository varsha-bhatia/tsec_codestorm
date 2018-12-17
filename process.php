<?php include 'db.php'; ?>

<?php
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$psw = mysqli_real_escape_string($conn,$_POST['psw']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);

		$query = "INSERT INTO signup(firstname,lastname,psw,email,gender) VALUES('$firstname','$lastname','$psw','$email','$gender')";
		if(!mysqli_query($conn, $query)){
			die(mysqli_error($conn));
		} else {
			header("Location: signup.php?success=Details%20Added");
		}
		header("Location: login.php");
	
?>