<?php
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    switch ($msg) {
        case 'err_sql' :
            echo ("<p>Erreur SQL</p> \r\n");
            break;
        case 'err_login' :
            echo ("<p>Le login n'existe pas, recommencez.</p> \r\n");
            break;
        case 'err_password' :
            echo ("<p>Mot de passe incorrecte.</p> \r\n");
            break;
        default :
            echo ("<p>Msg d'erreur non pris en charge.</p> \r\n");
            break;
    }
}
?>
<!--se connecter w3school-->
<!-- Bouton pour ouvrir le formulaire -->
<a href="#" class="nav-link" onclick="document.getElementById('id01').style.display = 'block'">Se connecter</a>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Fermer">&times;</span>
    <form class="modal-content" action="index.php?choix=authentification_start" method="POST">
        <div class="container_form">
            <h1>Connectez vous</h1>
            <hr>
            <label for="login">Login :</label>
            <input id="login" name="login" class="form-control" type="text" autofocus required>

            <label for="password">Password :</label>
            <input id="password" name="password" class="form-control" type="password" required>

            <label>
                <input id="voir_mdp" name="voir_mdp" type="checkbox" onclick="fonction_voir_mdp()"> Voir le mot de passe
            </label>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn btn btn-success">Quitter</button>
                <button type="submit" class="signupbtn btn btn-danger">Se connecter</button>
            </div>
        </div>

        <p id="pas_encore_inscris"><a href="index.php?choix=new_member_formulaire">Pas encore inscrit ?</a></p>
    </form>
</div>