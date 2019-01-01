<script>
	$.post("app/view/svet/Svet.php", function(data){
			Svet();
	});
	function Svet(){		
		var menu_svet = document.getElementsByClassName('menu_svet');

		for(var i = 0; i < menu_svet.length; i++){
			menu_svet[i].addEventListener('click', function(){
				window.history.pushState('', '', '/Rocnikovka/index.php?menu=svet&detail='+this.getAttribute('name'));
				$("#content").load("app/view/svetDetail/svetDetail.php");				
			})
		}	

	}
</script>