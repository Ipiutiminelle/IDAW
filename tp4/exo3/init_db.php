<?php
echo "aled";
require_once('/Applications/MAMP/htdocs/IDAW/TP4/exo2/config.php');
$connectionString = "mysql:host=" . _MYSQL_HOST;
if (defined('_MYSQL_PORT'))
    $connectionString .= ";port=" . _MYSQL_PORT;
$connectionString .= ";dbname=" . _MYSQL_DBNAME;
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
$pdo = NULL;
echo "aled";
try {
    $pdo = new PDO($connectionString, _MYSQL_USER, _MYSQL_PASSWORD, $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erreur) {
    echo 'Erreur : ' . $erreur->getMessage();
}
echo "aled";

$sql = file_get_contents("sql/create_db.sql");

echo "aled_file";
$result = $pdo->prepare($sql);
echo "aled_prepare";
$result->execute();

echo "aled_fini";

print_r($result);
?>