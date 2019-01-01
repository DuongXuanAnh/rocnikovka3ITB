<?php 
  if(!isset($_SESSION['userName'])){
    $_SESSION['userName'] = "";
  };
  if(!isset($_SESSION['role'])){
    $_SESSION['role'] = "";
  };
 ?>
<script>
	document.addEventListener("DOMContentLoaded", function(event) { 
		// Vymenovani itemi na hlavnim MENU
    var nav_Link_Index = document.getElementsByClassName('nav-link-index');
    var navbarSupportedContent = document.getElementById('navbarSupportedContent');
    var resposive_btn = document.getElementById('resposive_btn');
    var signedIn = document.getElementById('signedIn');
    var notSignIn = document.getElementById('notSignIn');
    var opravy = document.getElementById('opravy');;

    if("<?php echo $_SESSION['userName']; ?>" != ""){
        signedIn.classList.remove('hide');
        notSignIn.classList.add('hide');
    }else{
       signedIn.classList.add('hide');
        notSignIn.classList.remove('hide');
    }

    if("<?php echo $_SESSION['role']; ?>" == "2"){
        opravy.classList.remove('hide');
    }else{
        opravy.classList.add('hide');
    }

    for(var i = 0; i < nav_Link_Index.length; i++){
     nav_Link_Index[i].addEventListener('click', function(){
      for(var i = 0; i < nav_Link_Index.length; i++){
       nav_Link_Index[i].classList.remove('active-link');
     }
     this.classList.add('active-link');
     if(window.innerWidth < 992){
      resposive_btn.click();
     return;
     }
  })
   }
  		 //Login
       var btn_login = document.getElementById('login');
       var black_modal = document.getElementById('black_modal');
       var login_panel = document.getElementById('login_panel');


       btn_login.addEventListener('click', function(){
         black_modal.classList.remove('hide');
         login_panel.classList.remove('hide');
       });	

       black_modal.addEventListener('click', function(){
         black_modal.classList.add('hide');
         login_panel.classList.add('hide');
       });
     });
   </script>