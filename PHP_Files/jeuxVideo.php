<div>
    <img id="mario_zombie" class='img-fluid' src="image/mario_zombie2.png" alt=""/>
</div>

<div class="menu_plateforme text-center" id="up" style="border: 5px ridge black; box-shadow: 5px 10px 50px #d9534f inset; margin-top: 50px; margin-left: 400px; margin-right: 400px; padding-top: 150px; padding-bottom: 150px;">

    <div id='ps4' style="display: inline;">
        <a href="#"><img src="image/playstation.png" alt='ps4_logo' style="width: 90px;"></a>
    </div>
    <div id='xbox' style="display: inline;">
        <a href="#"><img src="image/xbox.png" alt='xbox_logo' style="width: 90px;"></a>
    </div>
    <div id='nintendo' style="display: inline;">
        <a href="#"><img src="image/nintendo.png" alt='nintendo_logo' style="width: 130px;"></a>
    </div>
    <div id='steam' style="display: inline;">
        <a href="#"><img src="image/steam.png" alt='steam_logo' style="width: 90px;"></a>
    </div>
</div>

<div>
    <img id="luigi" class="img-fluid" src="image/luigi.png" alt=""/>
</div>

<?php
$sql = "SELECT id, plateforme, libre1 FROM jeu";
$sth = $dbh->prepare($sql);
$requete_correcte = $sth->execute();

if ($requete_correcte === FALSE) {
    echo("Erreur : la requete SQL est incorrecte. <br/>");
} else {
    $images = $sth->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div>
        <?php foreach ($images as $img) { ?>
            <div class="container <?php echo($img['plateforme']); ?>" style="display: none; margin-top: 20px;">
                <div class="card bg-transparent float-left" style="width: 230px; margin-bottom: 20px; border: none; margin-left: 20px;">
                    <a href="index.php?choix=liste_jeux&id=<?php echo($img['id']); ?>">
                        <?php
                        if (empty($img['libre1'])) {
                            $img['libre1'] = "mario_repair.png";
                        }
                        ?>
                        <img class="img-fluid img-thumbnail" src="image/<?php echo($img['libre1']); ?>" alt="Image" style="width: 230px;"/>
                    </a>
                    <div class="card-body" style="padding-bottom: 5px; padding-top: 5px; margin-left: 10px; text-align: center;">
                        <a  href="index.php?choix=liste_jeux&id=<?php echo($img['id']); ?>" class='btn btn-danger'><span class="spinner-grow spinner-grow-sm"></span> Consulter le jeu</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
?>