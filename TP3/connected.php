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
if (isset($_POST['login']) && isset($_POST['password'])) {
   $tryLogin = $_POST['login'];
   $tryPwd = $_POST['password'];
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

<!-- réponse question 1.4) => On remarque que le login et le password sont dans l'URL -->

<!-- réponse question 2.3) => POST est plus sécurisée car les données ne sont pas présentes dans l'URL -->