<script>
	$.post("app/view/uvod/Uvod.php", function(data){
					Uvod();
	});
		function Uvod(){		
			var uvod_text = document.getElementById('uvod_text');
			var btn_potrvdit_uvod = document.getElementById('btn_potrvdit_uvod');
			btn_potrvdit_uvod.addEventListener('click', function(){

				$.post("app/ajax/uvod/AjaxUvod.php",{text:uvod_text.value}, function(data){
					if(data=="ok"){
						swal("Úspěsně opraveno!", "Klikněte na tlačítko a pokračujte!", "success");
					}else{
						swal ("Došlo k chybě" ,  "Zkuste to znovu!" ,  "error" )
					}
				});
			})
	}
</script>