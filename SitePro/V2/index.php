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
            renderMenuToHTML('index');
        ?>
    </nav>
       
       
    
        
<footer class="footer">
<?php
require_once('template_footer.php');
?>
</footer>



</body>
</html>