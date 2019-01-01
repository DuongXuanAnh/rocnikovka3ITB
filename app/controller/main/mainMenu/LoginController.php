    <?php
      // error_reporting(0);
      // if($_SESSION['role'] == 1){
      //     echo "user";
      // }else if ($_SESSION['role'] == 2){
      //    echo "admin";
      // }else{
      //   echo "Nejste prihlaseny";
      // }
    ?>
<script>
	document.addEventListener("DOMContentLoaded", function(event) {
		var btn_login = document.getElementById('btn_login');
		var logout = document.getElementById('logout');
		var username_login = document.getElementById('username_login');
		var input_info = document.getElementsByClassName('input_info');
		var password_login = document.getElementById('password_login');
		var waring_name = document.getElementById('waring_name');
		var waring_pass = document.getElementById('waring_pass');

		//Logout----------------------------------------------------------------------------------

		logout.addEventListener('click',function(){
			$.post("app/ajax/logout/AjaxLogout.php",function(data){
				if(data === "logout" ){
						window.location.href = "";
				}
			});
		});

		//Login----------------------------------------------------------------------------------
		for(var i = 0; i < input_info.length; i++){
		input_info[i].addEventListener('keyup', function(event) {
			  event.preventDefault();
			  if (event.keyCode === 13) {
			   	login();
			  }
			});
	}


		btn_login.addEventListener('click', function(){
			login();
		})

		function login(){
			var username = username_login.value;
			var password = password_login.value;
			$.post("app/ajax/login/AjaxLogin.php",{username:username, password:password},function(data){
				if(data.substring(0, 11) === "successfull"){
					if(data.substring(11,12) == 2){
						window.location.href = "app/view/admin/Admin.php?id="+data.substring(12)+"&role="+data.substring(11,12);
					}
					else if(data.substring(11,12) == 1){
						window.location.href = "index.php?id="+data.substring(12)+"&role="+data.substring(11,12);
					}
				}
				if(data === "wrong_login"){
					waring_name.classList.remove('hide');
				}else{
					waring_name.classList.add('hide');
				}
				if(data === "wrong_pass"){
					waring_pass.classList.remove('hide');
				}else{
					waring_pass.classList.add('hide');
				}
			})
		}
		//------------------------------------------------------------------------------------
	})
</script>
