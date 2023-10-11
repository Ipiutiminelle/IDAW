<?php
echo "<link rel=\"stylesheet\" href=\"" . $_COOKIE['selectedStyle'] . ".css\" type=\"text/css\"media=\"screen\" title=\"default\" charset=\"utf-8\" />";
session_start();
?>


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

/*On utilise session_id() pour récupérer l'id de session s'il existe.
 *Si l'id de session n'existe  pas, session_id() renvoie une chaine
 *de caractères vide*/
$id_session = session_id();

$_SESSION['Login'] = $login;
?>

<?php
echo "<p>Voilà ton login de Session : " . $_SESSION['Login'] . "</p>";
?>


<input class="favorite styled" type="button" value="Déconnexion" href="supprimer_session.php" />

<a href='login.php'>login</a>

<!-- réponse question 1.4) => On remarque que le login et le password sont dans l'URL -->

<!-- réponse question 2.3) => POST est plus sécurisée car les données ne sont pas présentes dans l'URL -->