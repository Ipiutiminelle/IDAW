<?php

function supprimerBDD($id, $pdo)
{
    /* global $pdo; on peut utiliser ça pour mettre en global mais ça créer une dépendance implicite entre l'existence de $pdo et la bonne marche de la fonction, alors que mettre $pdo en paramètre permet de rendre la dépendnace explicite */


    $sql = "DELETE FROM `users` WHERE `id` = $id;";

    $pdo->exec($sql);

}

?>