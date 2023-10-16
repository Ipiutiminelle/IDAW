<?php
session_start();

require_once("template_header.php");
require_once("template_menu.php");
$currentPageId = 'accueil';
$currentLang = "fr/";
if (isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
}
?>
<header>
    <p class="titreSite">Présentation du magnifique <br> Géry Bellanger</p>
</header>
<?php
renderMenuToHTML($currentPageId);
?>
<section class="corps">
    <?php
    $pageToInclude = $currentLang . $currentPageId . ".php";
    if (is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
    ?>
    <?php


    ?>
    <?php
    if (!isset($_SESSION['Login'])) {
        require_once("formulaire_log.php");
    } else {
        echo "<p> Bienvenu " . $_SESSION['Login'] . "</p>";
        require_once("bouton_supp.php");
    }
    ;
    ?>

</section>




<?php
require_once("template_footer.php");
?>

<!-- il reste juste à faire un bouton pour changer la currentLang et prier, ça devrait marcher-->