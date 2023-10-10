<?php
require_once("template_header.php");
require_once("template_menu.php");
$currentPageId = 'accueil';
$currentLang = "fr/";
if(isset($_GET['page'])) {
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
$pageToInclude = $currentLang .$currentPageId . ".php";
if(is_readable($pageToInclude))
require_once($pageToInclude);
else
require_once("error.php");
?>
</section>

<?php
require_once("template_footer.php");
?>

<!-- il reste juste à faire un bouton pour changer la currentLang et prier, ça devrait marcher-->