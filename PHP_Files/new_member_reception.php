<?php
if ($_POST['password'] != $_POST['password_conf']) {
    header('Location:index.php?choix=new_member_formulaire&mess=err_mdp');
}
$login = $_POST['login'];
$sql = "SELECT login FROM membre WHERE login LIKE '$login'";
$sth = $dbh->query($sql);

$nouveaux_membres = $sth->fetch(PDO::FETCH_ASSOC);
if ($nouveaux_membres['login'] === $login) {
    header('Location:index.php?choix=new_member_formulaire&mess=err_login');
} elseif (($_POST['password'] === $_POST['password_conf']) && ($nouveaux_membres['login'] !== $login)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "INSERT INTO membre(login,password,libre1, libre2) VALUES('$login', '$password', 0, 0)";
    

    $nb_lignes_inserees = $dbh->exec($sql);
    var_dump($nb_lignes_inserees);

    if ($nb_lignes_inserees === 1) {
//        echo("Reussite de l’INSERT : 1 ligne a été inseree en DB.");
        header('Location:index.php?choix=rapport');
    } elseif ($nb_lignes_inserees === 0) {
        echo("Requete SQL syntaxiquement correcte MAIS aucune ligne n’a
été inseree en DB. Verifier la requete (table, colonnes...)");
    } elseif ($nb_lignes_inserees === FALSE) {
        echo("Requete SQL syntaxiquement incorrecte.");
    }
}
?>