<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<?php

// Récupérez la valeur de l'option sélectionnée dans le formulaire.
if (isset($_GET['css'])) {
    $selectedStyle = $_GET['css'];

    // Définissez un cookie pour stocker l'identifiant du style choisi.
    // Le cookie expirera après 7 jours (86400 secondes x 7 jours).
    setcookie('selected_style', $selectedStyle, time() + 86400 * 7, '/');
}


// Après avoir stocké le cookie, vous pouvez charger le style en fonction de sa valeur (si nécessaire).
// Par exemple, vous pourriez avoir une balise link dans votre HTML pour charger le CSS correspondant.

// Exemple de balise link qui charge le CSS en fonction de l'identifiant du style (à placer dans le <head> de votre HTML) :
if (isset($_COOKIE['selected_style'])) {
    $selectedStyle = $_COOKIE['selected_style'];
    echo '<link rel="stylesheet" type="text/css" href="' . $selectedStyle . '.css">';
}
?>