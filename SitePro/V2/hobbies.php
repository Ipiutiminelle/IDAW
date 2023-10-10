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
            renderMenuToHTML('hobbies');
        ?>
    </nav>
       
        <h1 class="description1">"J'aime bien écrire des livres et me battre à mains nues avec des projet Pharo qui se lancent pas (je perds souvent)"</h1>
        
       
        
<footer class="footer">
<?php
require_once('template_footer.php');
?>
</footer>



</body>
</html>