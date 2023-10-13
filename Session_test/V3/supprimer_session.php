<?php
if (isset($_POST['supprimer_session.php'])) {

    unset($_SESSION['login']);
    session_destroy();
}
header("Location: index.php");
?>