<?php
echo "<link rel=\"stylesheet\" href=\"" . $_COOKIE['selectedStyle'] . ".css\" type=\"text/css\"media=\"screen\" title=\"default\" charset=\"utf-8\" />";
session_start();
?>
<form id="login_form" action="connected.php" method="POST">
  <table>
    <tr>
      <th>Login :</th>
      <td><input type="text" name="login"></td>
    </tr>
    <tr>
      <th>Mot de passe :</th>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="Se connecter..." /></td>
    </tr>
  </table>
</form>

<?php
echo "<p>Voilà ton login de Session : " . $_SESSION['Login'] . "</p>";
?>

<form method="post">
  <input type="submit" name="supprimer_session.php" value="Déconnexion">
</form>