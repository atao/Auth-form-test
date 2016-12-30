<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['login']))
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: http://test/authentification.php');
  exit();
}
?>
