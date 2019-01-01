<?php 
	session_start();
			if($_SESSION['role'] != 2){
     			header('location: ../../../index.php');
     		}else{
     			header('location: ../../../index.php?id='.$_SESSION['id'].'&role='.$_SESSION['role']);
     		}
    // session_destroy(); 
 ?>

