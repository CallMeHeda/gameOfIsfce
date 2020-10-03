<?php if (isset($_SESSION['login'])) { ?>
    <h1 class="text-center" style="color: black; font-family: 'Times New Roman', Times, serif; text-transform: capitalize; text-shadow: 3px 2px #d9534f; margin-top: 10px; margin-bottom: 10px;"><?php echo("Bienvenu(e) sur Game Of Isfce, " . $_SESSION['login'] . " ! \r\n"); ?></h1>
<?php } ?>

<div class="container text-center carousel" id="up">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#"><img id="tout_les_jeux" src="image/header.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href="#"><img class="twitch" src="image/Twitch.png" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href="#"><img class="youtube" src="image/youtube.jpg" alt=""></a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!--Barre de recherche par titre-->
<div class="container mt-3 recherche"> 
    <input class="form-control" id="myInput" type="text" placeholder="Recherche par titre" autofocus>
    <br>
</div>
<!--Tout les jeux affichés sur la page d'accueil (possibilité de faire une recherche via le titre)-->
<?php
$sql = "SELECT id, titre, plateforme, libre1 FROM jeu";
$sth = $dbh->prepare($sql);
$requete_correcte = $sth->execute();

if ($requete_correcte === FALSE) {
    echo("Erreur : la requete SQL est incorrecte. <br/>");
} else {
    $images = $sth->fetchAll(PDO::FETCH_ASSOC);
    ?>
        <?php foreach ($images as $img) { ?>
            <div class="container tout_les_jeux" style="margin-left: 100px;">
                <div class="card bg-transparent float-left zoom" style="width: 260px; margin-bottom: 30px; border: none;">
                    <?php
                    if (empty($img['libre1'])) {
                        ?>
                        <a href="index.php?choix=liste_jeux&id=<?php echo($img['id']); ?>">
                            <img class="img-fluid img-thumbnail" src="image/mario_repair.png" alt="Image" style="margin-left: 0px; margin-top: 10px;"/>
                        </a>
                        <?php
                    } else {
                        ?>
                        <a href="index.php?choix=liste_jeux&id=<?php echo($img['id']); ?>">
                            <img class="img-fluid img-thumbnail" src="image/<?php echo($img['libre1']); ?>" alt="Image" style="margin-left: 0px; margin-top: 10px;"/>
                        </a>
                        <?php
                    }
                    ?>
                    <h4 class="card-title text-center"><?php echo($img['titre']); ?></h4>
                    <div class="card-body" style="padding-bottom: 5px; padding-top: 5px; margin-left: 10px; text-align: center;">
                        <a  href="index.php?choix=liste_jeux&id=<?php echo($img['id']); ?>" class='btn btn-danger'><span class="spinner-grow spinner-grow-sm"></span> Consulter le jeu</a>
                    </div>
                </div>
            </div>
            <?php
        }
}
        ?>

<!--Live twitch-->
<div class="container">
    <div class="float-left">
        <iframe class="twitch_live" src="https://player.twitch.tv/?channel=gotaga&autoplay=false" frameborder="0" allowfullscreen="" scrolling="no" height="178" width="350" style="display: none; margin: 20px 0px;"></iframe>
    </div>

    <div class="float-left">
        <iframe class="twitch_live" src="https://player.twitch.tv/?channel=esl_csgo&autoplay=false" frameborder="0" allowfullscreen="" scrolling="no" height="178" width="350" style="display: none; margin: 20px 20px;"></iframe>
    </div>

    <div class="float-left">
        <iframe class="twitch_live" src="https://player.twitch.tv/?channel=solary&autoplay=false" frameborder="0" allowfullscreen="" scrolling="no" height="178" width="350" style="display: none; margin: 20px 0px;"></iframe>
    </div>

    <div class="float-left">
        <iframe class="twitch_live" src="https://player.twitch.tv/?channel=csruhub&autoplay=false" frameborder="0" allowfullscreen="" scrolling="no" height="178" width="350" style="display: none; margin: 20px 0px;"></iframe>
    </div>

    <div class="float-left">
        <iframe class="twitch_live" src="https://player.twitch.tv/?channel=riotgames&autoplay=false" frameborder="0" allowfullscreen="" scrolling="no" height="178" width="350" style="display: none; margin: 20px 20px;"></iframe>
    </div>

    <div class="float-left">
        <iframe class="twitch_live" src="https://player.twitch.tv/?channel=ninja&autoplay=false" frameborder="0" allowfullscreen="" scrolling="no" height="178" width="350" style="display: none; margin: 20px 0px;"></iframe>
    </div>

</div>

<!--LIVE YOUTUBE-->
<div class="container">
    <div class="float-left">
        <iframe class="youtube_live" src="https://www.youtube.com/embed/FShR0fjREMY" frameborder="0" allowfullscreen height="178" width="350" style="display: none; margin: 20px 0px;"></iframe>
    </div>

    <div class="float-left">
        <iframe class="youtube_live" src="https://www.youtube.com/embed/BvvhhVM_VdM" frameborder="0" allowfullscreen height="178" width="350" style="display: none; margin: 20px 20px;"></iframe>
    </div>

    <div class="float-left">
        <iframe class="youtube_live" src="https://www.youtube.com/embed/p1S0ooPOGBA" frameborder="0" allowfullscreen height="178" width="350" style="display: none; margin: 20px 0px;"></iframe>
    </div>
</div>