<?php
$id = htmlspecialchars($_GET['id']);
?>
<h3>DELETE en DB du jeu n°<?php echo($id); ?></h3>
<?php
$sql = "DELETE FROM jeu WHERE id=:id";
$sth = $dbh->prepare($sql);
$sth->bindvalue(':id', $id);

$requete_correcte = $sth->execute();
if ($requete_correcte === FALSE) {
    echo("Erreur : la requete SQL est incorrecte. <br/>");
} else {
    $nb_lignes_supprimees = $sth->rowCount();
    if ($nb_lignes_supprimees === 1) {
        echo("Le jeu a bien été supprimé !");
    } elseif ($nb_lignes_supprimees === 0) {
        echo("Requete SQL syntaxiquement correcte MAIS aucune ligne n’a
été supprimee en DB. Verifier la requete(table,colonnes...)");
    } elseif ($nb_lignes_supprimees === FALSE) {
        echo("Requete SQL syntaxiquement incorrecte.");
    }
}
?>