<?php
// on simule une base de données
$users = array(
   // login => password
   'riri' => 'fifi',
   'yoda' => 'maitrejedi',
   'Camille' => 'Lachenille'
);
$login = "anonymous";
$errorText = "";
$successfullyLogged = false;
if (isset($_GET['login']) && isset($_GET['password'])) {
   $tryLogin = $_GET['login'];
   $tryPwd = $_GET['password'];
   // si login existe et password correspond
   if (array_key_exists($tryLogin, $users) && $users[$tryLogin] == $tryPwd) {
      $successfullyLogged = true;
      $login = $tryLogin;
   } else
      $errorText = "Erreur de login/password";
} else
   $errorText = "Merci d'utiliser le formulaire de login";
if (!$successfullyLogged) {
   echo $errorText;
} else {
   echo "<h1>Bienvenu " . $login . "</h1>";
}
?>

<!-- réponse question 4) => On remarque que le login et le password sont dans l'URL -->