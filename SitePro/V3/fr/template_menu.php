<?php
function renderMenuToHTML($currentPageId)
{
  $mymenu = array(
    'accueil' => 'Accueil',
    'cv' => 'Cv',
    'hobbies' => 'Hobbies',
    'projets' => 'Projets',
    'contact' => 'Contact'
  );
  echo "<header>
      <nav class=\"menu\">
            <ul class=\"nav\">";
  foreach ($mymenu as $pageId => $pageParameters) {
    if ($currentPageId == $pageId) {
      echo "<a class=\"nav1 active\" href=\"index.php?page=${pageId}\">${pageParameters}</a>";
    } else {
      echo "<a class=\"nav1\" href=\"index.php?page=${pageId}\">${pageParameters}</a>";
    }
  }

  echo " 
  <a href=\"../en/index.php?page=" . $currentPageId . "\">
      <img class=\"profil_image\" src=\"anglais.png\" width=50px height=50px alt=\"image de moi\">
  </a>

      <ul>
      </nav>";
}
?>