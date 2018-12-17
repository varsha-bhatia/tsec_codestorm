<?php

$conn = mysqli_connect('localhost','root','123456','hackathon');

if(mysqli_connect_error()){
	echo 'DB Connection Error:'.mysqli_connect_error();
}
?>