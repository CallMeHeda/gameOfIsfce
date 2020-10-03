<?php
$sql = "SELECT login, libre2 FROM membre ORDER BY libre2 DESC";
$sth = $dbh->query($sql);

if ($sth === FALSE) {
    echo("Erreur : la requete SQL est incorrecte. <br/>");
} else {
    $les_membres = $sth->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container" style="margin-top: 100px;">
        <table class="table table-striped bg-danger" style="border: 3px solid black;">
            <thead>
                <tr>
                    <th class="text-center">Login</th>
                    <th class="text-center">Résultat quizz Nintendo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($les_membres as $un_membre) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo($un_membre['login']); ?></td>
                        <td class="text-center"><?php echo($un_membre['libre2']); ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <?php
    }
?>

<form method="POST" action="index.php?choix=classement_resultat_quizz_1">
<div class="text-center" style="margin-top: 50px;">
    <button id="bouton_quizz_classement" class="btn btn-danger" type="submit" name="submit">Voir le classement quizz PS4/XBOX</button>
</div>
</form>