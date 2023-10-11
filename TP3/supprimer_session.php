<?php
if (isset($_POST['supprimer_session.php'])) {

    unset($_SESSION['login']);
    session_destroy();
    echo "<p> hehe </p>";
}
?>