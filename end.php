<?php
  // Démarrage ou restauration de la session
  session_start();
  // Réinitialisation du tableau de session
  // On le vide intégralement
  $_SESSION = array();
  // Destruction de la session
  session_destroy();
  // Destruction du tableau de session
  unset($_SESSION);
?>
<?php
  echo "Déconnexion en cours...";
  sleep(1);
  header('Location: admin.php');
  exit();
?>
