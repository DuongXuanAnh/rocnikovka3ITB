
<div class="container uvod_container">
	<h1>Úvod</h1>
<?php 
    session_start();
	include('../../modules/Config.php');

	$sql = "SELECT * FROM uvod";
	$query = mysqli_query($conn, $sql);
	$radek=mysqli_fetch_array($query);

	if($_SESSION['role'] == 2){
		?>
	
	<textarea name="" id="uvod_text" cols="150" rows="20">
		<?php echo $radek['text']; ?>
	</textarea>
	<input type="button" class="btn btn-outline-info" name="btn_potrvdit" value="Potrvdit" id="btn_potrvdit_uvod">

	<?php
	}else{
		?>
	<div>
		<?php echo $radek['text']; ?>	
    </div>
		<?php
	}
 ?>
	</div>

