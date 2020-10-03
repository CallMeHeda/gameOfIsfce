<h3 style="text-align: center; color: crimson;">Resultat du quizz</h3>
<h6 style="text-align: center; color:  salmon;">
    <?php
    $login = $_SESSION['login'];
    $point = 0;

    for ($i = 1; $i <= 14; $i++) {
        if (isset($_POST["submit"])) {
            if (isset($_POST['q' . $i])) {
                if (($_POST['q' . $i] == 1)) {
                    echo("Question N°" . $i . " : Bonne réponse !" . "<br /> \r\n");
                    $point++;
                } else {
                    echo("Question N°" . $i . " : Mauvaise réponse !" . "<br /> \r\n");
                }
            }
        }
    }

    $sql = "UPDATE membre SET libre1 = '$point' WHERE login = '$login'";

//    var_dump($sql);
    $nb_lignes_inserees = $dbh->exec($sql);
//
//    if ($nb_lignes_inserees === 1) {
//        echo("Reussite de l’INSERT : 1 ligne a été inseree en DB.");
//    } elseif ($nb_lignes_inserees === 0) {
//        echo("Requete SQL syntaxiquement correcte MAIS aucune ligne n’a
//été inseree en DB. Verifier la requete (table, colonnes...)");
//    } elseif ($nb_lignes_inserees === FALSE) {
//        echo("Requete SQL syntaxiquement incorrecte.");
//    }

    echo("<br/>");
    echo ("Votre score est de $point bonnes réponses sur 7 <br/><br/> \r\n");
    if ($point >= 0 && $point < 5) {
        echo("<img src='image/marioandluigi.gif' alt=''/><br/> \r\n");
        echo "LOL ! " . $_SESSION['login'] . ", vous n'êtes PAS DU TOUT un gamer ! <br/> \r\n";
    } elseif ($point >= 5 && $point < 7) {
        echo("<img src='image/mario_vent.gif' alt=''/><br/> \r\n");
        echo "Continuez comme ça, " . $_SESSION['login'] . ", vous ferez bientôt partie de la team gamer :) <br/> \r\n";
    } else {
        echo("<img src='image/mario_ny.gif' alt=''/><br/> \r\n");
        echo "Félicitation, " . $_SESSION['login'] . ", c'est un sans fautes ! Vous êtes un gamer né ! (J'ésepére que vous n'avez pas triché en regardant les réponse !) <br/> \r\n";
    }
    ?>
</h6>
<form method="POST" action="index.php?choix=quizz_formulaire">
    <div class="text-center">
        <button id="bouton_quizz_reception" class="btn btn-danger" type="submit" name="submit">Recommencer le quizz</button>
    </div>
</form>
<form method="POST" action="index.php?choix=classement_resultat_quizz_1">
<div class="text-center">
    <button id="bouton_quizz_classement" class="btn btn-danger" type="submit" name="submit">Voir le classement</button>
</div>
</form>