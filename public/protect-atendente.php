
<?php
  if(!isset($_SESSION)){
    session_start();
  }
  if(!isset($_SESSION['idAdministrador'])){
    die("Você precisa estar logado <p><a href=\"login-adm.html\">Acessar página de login</a></p>");
  }
?>