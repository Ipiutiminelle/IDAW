<?php
require_once('config.php');
$connectionString = "mysql:host=" . _MYSQL_HOST;
if (defined('_MYSQL_PORT'))
    $connectionString .= ";port=" . _MYSQL_PORT;
$connectionString .= ";dbname=" . _MYSQL_DBNAME;
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
$pdo = NULL;
try {
    $pdo = new PDO($connectionString, _MYSQL_USER, _MYSQL_PASSWORD, $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erreur) {
    echo 'Erreur : ' . $erreur->getMessage();
}
$request = $pdo->prepare("select * from users");

// retrieve data from database using fetch(PDO::FETCH_OBJ) and
/*Sélectionne les valeurs dans les colonnes prenom et mail de la table
 *users pour chaque entrée de la table*/
$request->execute();

$resultat = $request->fetchAll(PDO::FETCH_OBJ);
function HTMLTable($resultat)
{
    if (count($resultat) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th></tr>";
        foreach ($resultat as $user) {
            echo "<tr><td class=\"data-field\">" . $user->name . "</td><td class=\"data-field\">" . $user->email . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }
}



// display them in HTML array
/*** close the database connection ***/
$pdo = null;
?>

<form id="login_form" action="connected.php" method="POST">
    <table>
        <tr>
            <th>Nom :</th>
            <td><input type="text" name="name" placeholder="ecris nom"></td>
        </tr>
        <tr>
            <th>Email :</th>
            <td><input type="text" name="email" placeholder="ecris mail"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Ajouter" /></td>
        </tr>
    </table>
</form>