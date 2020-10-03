<!--Navigation de base (se trouve sur toutes les pages-->
<nav id="nav_index" class="navbar navbar-expand-sm bg-danger justify-content-center sticky-top">
    <!--    navbar-fixed-top hidden-->

    <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="Index.php?choix=rapport">Rapport</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=accueil">Accueil</a></li>
        <li class="nav-item"><a class="jeuxV nav-link" href="index.php?choix=JeuxVideo">Jeux Video</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?choix=quizz_formulaire">Quizz</a></li>
        <li class="nav-item" style="margin-left: 415px;"><a class="nav-link" href='mailto:GameOfIsfce@gmail.com'>Me contacter</a></li>
        <li class="nav-item">
            <?php include("PHP_Files/se_connecter.php"); ?>
        </li>
    </ul>
    <!--    bouton switch integré dans la nav-->
    <?php include("PHP_Files/switch_theme.php"); ?>
</nav>