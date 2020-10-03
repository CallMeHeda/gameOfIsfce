<?php

$login_tentative = htmlspecialchars($_POST['login']);
$password_tentative = htmlspecialchars($_POST['password']);

$sql = "SELECT * FROM membre WHERE login=:login_tentative";
$sth = $dbh->prepare($sql);
$sth->bindvalue(':login_tentative', $login_tentative);

$requete_correcte = $sth->execute();

if ($requete_correcte === FALSE) {
    header('Location:index.php?choix=accueil&msg=err_sql');
} else {
    $utilisateur = $sth->fetch(PDO::FETCH_ASSOC);
    if (empty($utilisateur)) {
        header('Location:index.php?choix=rapport&msg=err_login');
    } elseif ($password_tentative === $utilisateur['password']) {
        session_regenerate_id();
        ini_set('session.gc_maxlifetime', 10800);
        $_SESSION['login'] = $utilisateur['login'];
        header('Location:index.php?choix=rapport');
    } else {
        header('Location:index.php?choix=rapport&msg=err_password');
    }
}
?>