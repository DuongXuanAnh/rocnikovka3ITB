<?php 
	include('../../modules/Config.php');
	$text = $_POST['text'];
	$sql = "UPDATE `uvod` SET `text`= '$text'";
	$query = mysqli_query($conn, $sql);
	echo "ok";
 ?>