<?php 
	session_start();
	$_SESSION['role'] = 0;
	$_SESSION['id'] = 0;
	$_SESSION['userName'] = "";
	include('../../modules/Config.php');
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE nick_name = '$username' AND password = '$password'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($query);
	$radek=mysqli_fetch_array($query);
	

	$sql_name = "SELECT * FROM users WHERE nick_name = '$username'";
	$query_name = mysqli_query($conn, $sql_name);
	$row_name = mysqli_num_rows($query_name);
	$radek_name=mysqli_fetch_array($query_name);

	$sql_pass = "SELECT * FROM users WHERE password = '$password'";
	$query_pass = mysqli_query($conn, $sql_pass);
	$row_pass = mysqli_num_rows($query_pass);
	$radek_pass=mysqli_fetch_array($query_pass);
	

	if($row > 0){
		$_SESSION['role'] = $radek['role'];
		$_SESSION['id'] = $radek['id_user'];
		$_SESSION['userName'] = $radek['nick_name'];
		echo "successfull".(string)$radek['role'].(string)$radek['id_user'];
	}
	if($row_name == 0){
		echo "wrong_login";
		return;	
	}
	if($row_pass == 0){
		echo "wrong_pass";
		return;	
	}
 ?>