<?php

$titre = htmlspecialchars($_POST['titre']);
$plateforme = htmlspecialchars($_POST['plateforme']);
$editeur = htmlspecialchars($_POST['editeur']);
$date_de_sortie = htmlspecialchars($_POST['date_de_sortie']);
$prix = htmlspecialchars($_POST['prix']);
$synopsis = htmlspecialchars($_POST['synopsis']);
$libre1 = htmlspecialchars($_POST['libre1']);
$libre2 = htmlspecialchars($_POST['libre2']);

$sql = "INSERT INTO jeu (titre,plateforme,editeur,date_de_sortie,prix,synopsis,libre1,libre2)"
        . "VALUES(:titre, :plateforme, :editeur, :date_de_sortie, :prix, :synopsis, :libre1, :libre2)";

$sth = $dbh->prepare($sql);
$sth->bindvalue(':titre', $titre);
$sth->bindvalue(':plateforme', $plateforme);
$sth->bindvalue(':editeur', $editeur);
$sth->bindvalue(':date_de_sortie', $date_de_sortie);
$sth->bindvalue(':prix', $prix);
$sth->bindvalue(':synopsis', $synopsis);
$sth->bindvalue(':libre1', $libre1);
$sth->bindvalue(':libre2', $libre2);

$requete_correcte = $sth->execute();
if ($requete_correcte === FALSE) {
    echo("Erreur : la requete SQL est incorrecte. <br/>");
} else {
    $nb_lignes_inserees = $sth->rowCount();

    if ($nb_lignes_inserees === 1) {
        echo("Le jeu a bien été ajouté !");
    } elseif ($nb_lignes_inserees === 0) {
        echo("Requete SQL syntaxiquement correcte MAIS aucune ligne n’a
été inseree en DB. Verifier la requete (table, colonnes...)");
    } elseif ($nb_lignes_inserees === FALSE) {
        echo("Requete SQL syntaxiquement incorrecte.");
    }
}