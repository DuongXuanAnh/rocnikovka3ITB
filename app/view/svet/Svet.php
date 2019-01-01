<?php 
	include('../../modules/Config.php');
	$sql = "SELECT * FROM grid_svet";
	$query = mysqli_query($conn,$sql);
?>
<div class="background_svet ">
<div class="grid_content">
	<div class="row">
	<?php while($radek = mysqli_fetch_array($query)){ ?>
		<div class="col-lg-3 col-md-6 grid_svet">
			<div class="menu_svet" name="<?php echo $radek['id_grid_svet'] ?>" id="<?php echo $radek['id_grid_svet'] ?>">
				<div class="text_In_Grid"><?php echo $radek['text'] ?></div>
			</div>	
	    </div>
	<?php } ?>
     </div>
</div>
</div>
