
<div id="content">
		
</div>

<script>
	var urlParams;
	var myParam;
	// var content = document.getElementById('content');
	var nav_Link_Index = document.getElementsByClassName('nav-link-index');
		$("#content").load("app/view/uvod/Uvod.php");
		$("#content").load("app/controller/uvod/UvodController.php");
		
		for(var i = 0; i < nav_Link_Index.length; i++){
		  nav_Link_Index[i].addEventListener('click', function(){
			for(var i = 0; i < nav_Link_Index.length; i++){
				nav_Link_Index[i].classList.remove('active-link');
			}
			this.classList.add('active-link');
			if(this.getAttribute('name') == "uvod"){
				window.history.pushState('', '', '/Rocnikovka/index.php?menu=uvod');
				urlParams = new URLSearchParams(window.location.search);
				myParam = urlParams.get('menu');
						
			}
			if(this.getAttribute('name') == "kde_A_Kdy"){
				window.history.pushState('', '', '/Rocnikovka/index.php?menu=kdeakdy');
				urlParams = new URLSearchParams(window.location.search);
				myParam = urlParams.get('kdeakdy');					
			}
			if(this.getAttribute('name') == "pravidla"){
				window.history.pushState('', '', '/Rocnikovka/index.php?menu=pravidla');
				urlParams = new URLSearchParams(window.location.search);
				myParam = urlParams.get('pravidla');					
			}
			if(this.getAttribute('name') == "svet"){
				window.history.pushState('', '', '/Rocnikovka/index.php?menu=svet');
				urlParams = new URLSearchParams(window.location.search);
				myParam = urlParams.get('menu');
			}
			if(this.getAttribute('name') == "galerie"){
				window.history.pushState('', '', '/Rocnikovka/index.php?menu=galerie');
				urlParams = new URLSearchParams(window.location.search);
				myParam = urlParams.get('galerie');					
			}
			if(this.getAttribute('name') == "kontakty"){
				window.history.pushState('', '', '/Rocnikovka/index.php?menu=kontakty');
				urlParams = new URLSearchParams(window.location.search);
				myParam = urlParams.get('kontakty');					
			}
			  control();
		})

	}


	function control(){
		if(myParam == "uvod"){
			$("#content").load("app/view/uvod/Uvod.php");
			$("#content").load("app/controller/uvod/UvodController.php");
		}
		if(myParam == "svet"){
			$("#content").load("app/view/svet/Svet.php");
			$("#content").load("app/controller/svet/SvetController.php");
		}
	}
	

</script>

	<!-- ------------------------------------------------------------------------- -->


