<!DOCTYPE html>
<html>
<head>
<?php
require_once('template_header.php');
?>
</head>
<body>

    <header>
        
        <p class="titreSite">Présentation du magnifique <br> Géry Bellanger</p>
        
     </header>

     <nav>
        <?php
            require_once('template_menu.php');
            renderMenuToHTML('cv');
        ?>
    </nav>
       
        <h1 class="description1">"J'ai fait des choses dans ma vie et j'en suis pas peu fier."</h1>
        
        
<footer class="footer">
<?php
require_once('template_footer.php');
?>
</footer>



</body>
</html>