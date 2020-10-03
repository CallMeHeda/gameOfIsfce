<?php
if (isset($_SESSION['login']) && $_SESSION['login'] === 'bob_1040') {
    ?>
    <nav id="nav_index" class="navbar navbar-expand-sm bg-danger navbar-light justify-content-center sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="index.php?choix=rapport">Rapport</a></li>
            <li class="nav-item"> <a class="nav-link" href="index.php?choix=accueil">Accueil</a></li>
            <li class="nav-item"> <a class="nav-link" href="index.php?choix=JeuxVideo">Jeux Video</a></li>
            <li class="nav-item"> <a class="nav-link" href="index.php?choix=quizz_formulaire">Quizz</a></li>
            <li class="nav-item"> <a class="nav-link" href="index.php?choix=ajout_jeux">Ajouter un jeu</a></li>
            <!--Bouton déconnexion-->
            <li class="nav-item" style="margin-left: 415px;">
                <form id="deconnexion" class="form-inline ml-auto text-center" action="index.php?choix=authentification_stop" method="POST">
                    <a href="index.php?choix=authentification_stop" class="nav-link">Deconnexion</a>
                </form>
            </li>
        </ul>
        <?php include("PHP_Files/switch_theme.php"); ?>
    </nav>
    <?php
} else {
    ?>
    <nav id="nav_index" class="navbar navbar-expand-sm bg-danger navbar-light justify-content-center sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="index.php?choix=rapport">Rapport</a></li>
            <li class="nav-item"> <a class="nav-link" href="index.php?choix=accueil">Accueil</a></li>
            <li class="nav-item"> <a class="nav-link" href="index.php?choix=JeuxVideo">Jeux Video</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?choix=quizz_formulaire">Quizz</a></li>
            <li class="nav-item" style="margin-left: 415px;"><a class="nav-link" href='mailto:GameOfIsfce@gmail.com'>Me contacter</a></li>            
            <!--Bouton déconnexion-->
            <li class="nav-item">
                <form id="deconnexion" class="form-inline ml-auto text-center" action="index.php?choix=authentification_stop" method="POST">
                    <a href="index.php?choix=authentification_stop" class="nav-link">Deconnexion</a>
                </form>
            </li>
        </ul>
        <?php include("PHP_Files/switch_theme.php"); ?>
    </nav>
    <?php
}
?>