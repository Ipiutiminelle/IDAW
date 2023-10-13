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
        session_start();
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

header("Location: index.php");
?>