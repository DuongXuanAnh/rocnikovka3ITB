<?php 
	$host = "localhost";
	$name = "root";
	$pass = "";
	$database = "aran";

	$conn = mysqli_connect($host,$name,$pass,$database) or die("Error");
	mysqli_set_charset($conn, 'UTF8');
 ?>