<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="http://localhost:8012/Rocnikovka/">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style/index.css">
	<link rel="stylesheet" href="style/main/uvod.css">
	<link rel="stylesheet" href="style/main/svet.css">
	<link rel="stylesheet" href="style/main/login.css">
	<link rel="stylesheet" href="style/responsive.css">
	<script src="jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
</head>
<body>
	<?php
	include('app/modules/Config.php');
	include('app/modules/Menu.php');
	?>
	
	<?php
	include('app/modules/Content.php');	
	?>
	
</body>

</html>