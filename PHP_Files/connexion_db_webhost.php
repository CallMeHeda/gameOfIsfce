<?php

define('USER', 'id8978993_fatoo');
define('PASSWORD', 'Goi.1040.Gisfce');
define('DSN', 'mysql:host=localhost;dbname=id8978993_jeuxvideo;charset=UTF8');
try {
    $dbh = new PDO(DSN, USER, PASSWORD);

} catch (PDOException $exception) {
    echo("Connexion à la DB : erreur <br/>");
    echo("Vérifiez en premier lieu USER, PASSWORD, dbname <br/>");
    echo("Cause : " . $exception->getMessage() . "<br/>");
    die();
}
?>

