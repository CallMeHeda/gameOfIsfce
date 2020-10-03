<?php
$id = htmlspecialchars($_GET['id']);
$sql = "SELECT * FROM jeu where id = :id";
$sth = $dbh->prepare($sql);
$sth->bindvalue(':id', $id);

$requete_correcte = $sth->execute();

if ($requete_correcte === FALSE) {
    echo("Erreur : la requete SQL est incorrecte. <br/>");
} else {
    $les_jeux = $sth->fetchAll(PDO::FETCH_ASSOC);
    foreach ($les_jeux as $un_jeu) {
        if (isset($_SESSION['login']) && $_SESSION['login'] === 'bob_1040') {
            ?>
            <div id="ps4_jeux" class='row justify-content-center' style="background-image: url(image/<?php echo $un_jeu['libre2']; ?>); width: 100%; margin-left: 1px; margin-top: 10px;">
                <div class='col-sm-4 text-center' style="margin-top: 50px; margin-bottom: 100px;">
                    <div class="card">
                        <div  class="card-header bg-danger">
                            <h3> Titre : <?php echo($un_jeu['titre']); ?>
                                <!--Icone poubelle-->
                                <a href="index.php?choix=supression_jeux&id=<?php echo($un_jeu['id']); ?>"><button style="font-size:24px" class="btn bg-transparent"><i class='fas fa-trash-alt'></i></button></a>
                            </h3>
                        </div>
                        <div id="play" class="card-body bg-danger">
                            <p><b>Plateforme :</b> <i><?php echo($un_jeu['plateforme']); ?></i></p>
                            <p><b>Editeur :</b> <i><?php echo($un_jeu['editeur']); ?></i></p>
                            <p><b> Date de sortie :</b> <i><?php echo($un_jeu['date_de_sortie']); ?></i></p>
                            <p><b> Prix :</b> <i><?php echo($un_jeu['prix']); ?></i></p>
                            <p><b> Synopsis :</b> <i><?php echo($un_jeu['synopsis']); ?></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div id="ps4_jeux" class='row justify-content-center' style=" background-image: url(image/<?php echo $un_jeu['libre2']; ?>); width: 100%; margin-left: 1px; margin-top: 10px;">
                <div class='col-sm-4 text-center' style="margin-top: 50px; margin-bottom: 100px;">
                    <div class="card">
                        <div  class="card-header bg-danger">
                            <h3> Titre : <?php echo($un_jeu['titre']); ?></h3>
                        </div>
                        <div id="play" class="card-body bg-danger">
                            <p><b>Plateforme :</b> <i><?php echo($un_jeu['plateforme']); ?></i></p>
                            <p><b>Editeur :</b> <i><?php echo($un_jeu['editeur']); ?></i></p>
                            <p><b> Date de sortie :</b> <i><?php echo($un_jeu['date_de_sortie']); ?></i></p>
                            <p><b> Prix :</b> <i><?php echo($un_jeu['prix']); ?></i></p>
                            <p><b> Synopsis :</b> <i><?php echo($un_jeu['synopsis']); ?></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
?>