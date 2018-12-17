

<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php

$email=$_POST['email'];
$password=$_POST['psw'];

$sql = "SELECT email,psw FROM signup where email='$email' && psw='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if(($row['email']==$email) && ($row['psw']==$password))
		{
			echo "<script type='text/javascript'>alert('login successfull')</script>";

		}
	}		 
}
else {
	echo "<script type='text/javascript'>alert('Invalid Credentials.')</script>";
}
header("Location: index.php");
	?>
	
</body>
</html>