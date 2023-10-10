<?php
    function renderMenuToHTML($currentPageId) {
      $mymenu = array(
      'index' => 'Accueil',
      'cv' => 'Cv',
      'hobbies' => 'Hobbies',
      'projets' => 'Mes Projets'
      );
      echo "<header>
      <nav class=\"menu\">
            <ul class=\"nav\">";
      foreach($mymenu as $pageId => $pageParameters) {
        if($currentPageId == $pageId){
          echo "<a class=\"nav1 active\" href=\"index.php?${pageId}.php\">${pageParameters}</a>";
        }
        else{
          echo "<a class=\"nav1\" href=\"index.php?'${pageId}'.php\">${pageParameters}</a>";
        }
      }
      echo "\n<img class=\"profil-image\" src=\"logo_site.png\" alt=\"Shrekipotter\">
      <ul>
      </nav>";
    }
  ?>