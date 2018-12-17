<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		$search=$_POST['search'];

		$sql = "SELECT s_name,descrip FROM schema where search='$search'";

		$result = $conn->query($sql);
			if(!$result){
				echo "hello";
			}
			// if ($result->num_rows > 0)
			// {
			// 	while($row = $result->fetch_assoc())
			// 	{
			// 		if($row['search']==$search)
			// 		{
			// 		echo '$row["search"]' ;

			// 		}
			// 	}
			// }
			else {
				echo "<script type='text/javascript'>alert('Invalid Credentials.')</script>";
			}
			
		

	?>
</body>
</html>