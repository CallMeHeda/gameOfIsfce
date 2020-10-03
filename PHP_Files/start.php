<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Game Of Isfce</title>
        <!--        <link href="../css/style_start.css" rel="stylesheet" type="text/css"/>-->
        <link rel="stylesheet" href="../bootstrap/theme/theme1.css">
        <script src="../bootstrap/jquery/jquery-3.3.1.min.js"></script>
        <script src="../bootstrap/popper/popper.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!--Code source logo onglet pris sur http://www.isfce.org/claro/-->
        <link href="image/goi_icon.png" rel="shortcut icon"/>
    </head>
    <body style="background-image: url('image/tlou_window.gif'); background-repeat: no-repeat; background-size: 100%;">
        <!--Bouton PRESS START-->
        <div class="ps container" style='padding: 300px 500px;'>
            <a href="#"><button id='btn_start' type="button" class="btn btn-outline-danger btn-lg">Press Start</button></a>
        </div>
        <div class="connexion container float-left" style='display: none; padding: 50px 500px; margin-left: -400px;'>
            <a href="index.php?choix=rapport"><button id='btn_go' class="btn btn-danger btn-lg">Vers le site</button></a>
        </div>

        <div class="connexion container float-left" style='display: none; padding: 50px 500px; margin-left: -300px;'>
            <a href="#"><button id='btn_connexion' class="btn btn-danger btn-lg">Se connecter</button></a>
        </div>

        <div class="connexion container float-left" style='display: none; padding: 50px 500px; margin-left: -200px;'>
            <a href="#"><button id='btn_new' class="btn btn-danger btn-lg">Créer un compte</button></a>
        </div>
        
        <div class="basp connexion">
            <p>*Quel que soit votre choix, vous serez redirigé vers le rapport.</p>
        </div>
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
        <div class="connexion_start" style='display: none;'>
            <div class="col-sm-6 offset-sm-3 text-center">
                <form id='form_inscription_start' class="justify-content-center text-center" method="POST" action="index.php?choix=authentification_start">
                    <div class='form-group'>
                        <label for="login"><b>Login : </b></label> 
                        <input id="login" name="login" type="text" class="form-control" required>
                    </div>

                    <div class='form-group'>
                        <label for="password"><b>Password : </b></label> 
                        <input id="password" name="password" type="password" class="form-control" required>
                    </div>

                    <input type="submit" value="Se connecter" class='btn btn-danger'> <br/>          
                </form>
            </div>
        </div>
        <!--        s'inscrire-->
        <?php
        if (isset($_GET['mess'])) {
            $mess = $_GET['mess'];
            switch ($mess) {
                case 'err_mdp' :
                    echo ("<p>Mot de passe inco</p> \r\n");
                    break;
                case 'err_login' :
                    echo ("<p>Le login n'existe deja en DB.</p> \r\n");
                    break;
                default :
                    echo ("<p>Msg d'erreur non pris en charge.</p> \r\n");
                    break;
            }
        }
        ?>
        <div class="new_start" style='display: none;'>
            <div class="col-sm-6 offset-sm-3 text-center">
                <form  class="justify-content-center text-center" method="POST" action="index.php?choix=new_member_reception">

                    <div id="form-group0" class="form-group">
                        <label for="login" class="control-label"><b>Login :</b></label>
                        <input id="login_" name="login" class="form-control" type="text"> 
                        <span id="form-text0" class="form-text" style="display: none;">Minimum 6 caractères</span>
                    </div>

                    <div id="form-group1" class="form-group">
                        <label for="password" class="control-label"><b>Password :</b></label>
                        <input id="password_inscription" name="password" class="form-control" type="password"> 
                        <span id="form-text1" class="form-text" style="display: none;">Mot de passe : minimum 3 caractères et minimum 2 chiffres</span>
                    </div>

                    <div class='form-group'>
                        <label for="password_conf"><b>Confirmez le password : </b></label> 
                        <input id="password_conf" name="password_conf" type="password" class="form-control" required>
                    </div>

                    <label>
                        <input id="voir_mdp" name="voir_mdp" type="checkbox" onclick="fonction_voir_mdp_inscription()"> Voir le mot de passe
                    </label>
                    <button id="button_submit" type="SUBMIT" class="btn btn-danger">S'inscrire</button>
                </form>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#img_header").hide();
                $("#nav_index").hide();
                $("footer").hide();
                $(".basp").hide();

                //Afficher Connexion bouton
                $(".ps").click(function () {
                    $(this).hide();
                    $(".connexion").show();
                });
                $("#btn_connexion").click(function () {
                    $(this).hide();
                    $("#btn_new").hide();
                    $("#btn_go").hide();
                    $(".connexion_start").show();

                });
                $("#btn_new").click(function () {
                    $(this).hide();
                    $("#btn_connexion").hide();
                    $("#btn_go").hide();
                    $(".new_start").show();
                });
            });
        </script>

    </body>
</html>