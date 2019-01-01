<nav class="navbar navbar-expand-lg indexMenu ">
  <button class="navbar-toggler navbar-dark navbar-resposive" id="resposive_btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <div class="nav-link nav-link-index active-link" name="uvod">ÚVOD<span class="sr-only">(current)</span></div>
      </li>
      <li class="nav-item ">
        <div class="nav-link nav-link-index" name="kde_A_Kdy">KDE A KDY</div>
      </li>
      <li class="nav-item">
        <div class="nav-link nav-link-index" name="pravidla">PRAVIDLA</div>
      </li>
       <li class="nav-item">
        <div class="nav-link nav-link-index" name="svet">SVĚT</div>
      </li>
       <li class="nav-item">
        <div class="nav-link nav-link-index" name="galegie">GALERIE</div>
      </li>
       <li class="nav-item">
        <div class="nav-link nav-link-index" name="kontakty">KONTAKTY</div>
      </li>
       <li class="nav-item hide" id="opravy">
        <div class="nav-link nav-link-index" name="kontakty">Opravy</div>
      </li>
        <!-- ----------------------------------------------------------------------------------------- -->
      
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-link-ucet" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ÚČET
        </a>
        <div class="dropdown-menu dropdown-menu-ucet" aria-labelledby="navbarDropdown" id="notSignIn">
          <a class="dropdown-item dropdown-item-login" id="login">Přihlásit se</a>
          <a class="dropdown-item dropdown-item-login">Registrace</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item dropdown-item-login">Jednorázový přístup</a>
        </div>
      </div>
        <!-- ----------------------------------------------------------------------------------------- -->

        <div class="nav-item dropdown afterLoginDropDown hide" id="signedIn">
        <a class="nav-link dropdown-toggle nav-link-ucet" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://dw9to29mmj727.cloudfront.net/properties/2016/525-SeriesThumb_NARSHP_400x320.jpg" alt="" class="profil">
        </a>
        <div class="dropdown-menu dropdown-menu-ucet" aria-labelledby="navbarDropdown">
          <a class="dropdown-item dropdown-item-login">Profil</a>
          <a class="dropdown-item dropdown-item-login">Můj termín</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item dropdown-item-login" id="logout">Odhlásit se</a>
        </div>
      </div>
        <!-- ----------------------------------------------------------------------------------------- -->

    </ul>
  </div>
</nav>
<?php 
  include("app/controller/main/mainMenu/MainMenuController.php");
  include("app/controller/main/mainMenu/LoginController.php");
 ?>
