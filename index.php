<?php
session_start();
include('PHP_Files/connexion_db.php');
//include('PHP_Files/connexion_db_webhost.php');
if (isset($_GET['choix'])) {
    $choix = $_GET['choix'];
} else {
    $choix = 'start';
}
switch ($choix) {
    case 'authentification_start' :
        include('PHP_Files/authentification_start.php');
        break;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Game Of Isfce</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style_JV.css" rel="stylesheet" type="text/css"/>
        <link class='link_theme' rel="stylesheet" href="bootstrap/theme/theme1.css">
        <script src="bootstrap/jquery/jquery-3.3.1.min.js"></script>
        <script src="bootstrap/popper/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!--Code source logo onglet pris sur http://www.isfce.org/claro/-->
        <link href="image/goi_icon.png" rel="shortcut icon"/>
        <!--        Pour avoir des  icones-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    </head>
    <body>
        <div class="container-fluid" id="contenu_body">
            <?php
            include("menu_header_footer/header.php");
            if (isset($_SESSION['login'])) {
                include("menu_header_footer/menu_authentifie.php");
            } else {
                include("menu_header_footer/menu_non_authentifie.php");
            }
            ?>
            <?php
            switch ($choix) {
                case 'authentification_stop' :
                    include('PHP_Files/authentification_stop.php');
                    break;
                case 'new_member_reception' :
                    include('PHP_Files/new_member_reception.php');
                    break;
                case 'accueil' :
                    include('PHP_Files/accueil.php');
                    break;
                case 'switch_theme' :
                    include('PHP_Files/switch_theme.php');
                    break;
                case 'rapport' :
                    include('PHP_Files/rapport.php');
                    break;
                case 'JeuxVideo' :
                    include('PHP_Files/jeuxVideo.php');
                    break;
                case 'liste_jeux' :
                    include('PHP_Files/JV_FILES/liste_jeux.php');
                    break;
                case 'supression_jeux' :
                    include('PHP_Files/JV_FILES/supression_jeux.php');
                    break;
                case 'ajout_jeux' :
                    include('PHP_Files/JV_FILES/ajout_jeux.php');
                    break;
                case 'ajout_jeux_reception' :
                    include('PHP_Files/JV_FILES/ajout_jeux_reception.php');
                    break;
                case 'quizz_formulaire' :
                    include('PHP_Files/quizz_formulaire.php');
                    break;
                case 'quizz_reception' :
                    include('PHP_Files/quizz_reception.php');
                    break;
                case 'quizz_reception2' :
                    include('PHP_Files/quizz_reception2.php');
                    break;
                case 'classement_resultat_quizz_1' :
                    include('PHP_Files/classement_resultat_quizz_1.php');
                    break;
                case 'classement_resultat_quizz_2' :
                    include('PHP_Files/classement_resultat_quizz_2.php');
                    break;
                case 'new_member_formulaire' :
                    include('PHP_Files/new_member_formulaire.php');
                    break;
                case 'se_connecter' :
                    include('PHP_Files/se_connecter.php');
                    break;
                default :
                    include('PHP_Files/start.php');
            }
            ?>
        </div>
        <?php
        include("menu_header_footer/footer.php");
        ?>
        <script>
            $(document).ready(function () {
                var form_completement_valide;

                $("#button_submit").click(function (evenement) {
                    form_completement_valide = true;

                    //Login minimum 6 caractères
                    var regex0 = /^[a-zA-Z0-9_]{6,}$/;
                    var phrase0 = $('#login_').val();
                    var resultat0 = regex0.test(phrase0);
                    if (resultat0 === true) {
                        // Coloration en vert
                        $('#login_').attr('class', 'form-control is-valid');
                        // Cacher le message d'erreur
                        $('#form-text0').hide();
                    } else {
                        // Lorsqu'un champ est non-valide, la valeur false sera définitivement écrite dans la variable
                        form_completement_valide = false;
                        // Coloration en rouge
                        $('#login_').attr('class', 'form-control is-invalid');
                        // Afficher le message d'erreur
                        $('#form-text0').show();
                    }

                    //Password au moins 3 caracteres et 2 chiffres
                    var regex1 = /^[a-zA-Z_]{3,}[0-9]{2,}$/;
                    var phrase1 = $('#password_inscription').val();
                    var resultat1 = regex1.test(phrase1);
                    if (resultat1 === true) {
                        // Coloration en vert
                        $('#password_inscription').attr('class', 'form-control is-valid');
                        // Cacher le message d'erreur
                        $('#form-text1').hide();
                    } else {
                        // Lorsqu'un champ est non-valide, la valeur false sera définitivement écrite dans la variable
                        form_completement_valide = false;
                        // Coloration en rouge
                        $('#password_inscription').attr('class', 'form-control is-invalid');
                        // Afficher le message d'erreur
                        $('#form-text1').show();
                    }

                    console.log("Formulaire complètement valide : " + form_completement_valide);
                    if (form_completement_valide === false) {
                        evenement.preventDefault();
                    }
                });

                // Affichage jeux ps4
                $("#ps4").click(function () {
                    $(".Xbox").hide();
                    $(".Nintendo").hide();
                    $(".Steam").hide();
                    $(".Playstation").show();
                    $("#luigi").css("left", "895px");
                });
                // Affichage jeux xbox
                $("#xbox").click(function () {
                    $(".Playstation").hide();
                    $(".Nintendo").hide();
                    $(".Steam").hide();
                    $(".Xbox").show();
                    $("#luigi").css("left", "895px");
                });
                // Affichage jeux nintendo switch
                $("#nintendo").click(function () {
                    $(".Playstation").hide();
                    $(".Xbox").hide();
                    $(".Steam").hide();
                    $(".Nintendo").show();
                    $("#luigi").css("left", "895px");
                });
                // Affichage jeux steam
                $("#steam").click(function () {
                    $(".Playstation").hide();
                    $(".Xbox").hide();
                    $(".Nintendo").hide();
                    $(".Steam").show();
                    $("#luigi").css("left", "895px");
                });

                //Accueil montre ce que l'on veut en fonction du carousel
                //Pour afficher tout les jeux
                $("#tout_les_jeux").click(function () {
                    $(".twitch_live").hide();
                    $(".youtube_live").hide();
                    $(".recherche").show();
                    $(".tout_les_jeux").show();
                });
                // Pour n'avoir que les live TWITCH
                $(".twitch").click(function () {
                    $(".tout_les_jeux").hide();
                    $(".recherche").hide();
                    $(".youtube_live").hide();
                    $(".twitch_live").show();
                });
                // Pour n'avoir que les live YOUTUBE
                $(".youtube").click(function () {
                    $(".tout_les_jeux").hide();
                    $(".recherche").hide();
                    $(".twitch_live").hide();
                    $(".youtube_live").show();
                });

                // Recherche de jeux depuis la page d'accueil (w3school)
                $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $(".container .card").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });

                // Quizz ps4/xbox réponses
                $(".reponse").hide();
                //Q1
                $("#aide1").click(function () {
                    $("#reponse1").fadeToggle();

                });
                //Q2
                $("#aide2").click(function () {
                    $("#reponse2").fadeToggle();

                });
                //Q3
                $("#aide3").click(function () {
                    $("#reponse3").fadeToggle();

                });
                //Q4
                $("#aide4").click(function () {
                    $("#reponse4").fadeToggle();

                });
                //Q5
                $("#aide5").click(function () {
                    $("#reponse5").fadeToggle();

                });
                //Q6
                $("#aide6").click(function () {
                    $("#reponse6").fadeToggle();

                });
                //Q7
                $("#aide7").click(function () {
                    $("#reponse7").fadeToggle();

                });

                // Quizz Nintendo réponses
//                $(".reponse").hide();
                //Q1
                $("#aide8").click(function () {
                    $("#reponse8").fadeToggle();

                });
                //Q2
                $("#aide9").click(function () {
                    $("#reponse9").fadeToggle();

                });
                //Q3
                $("#aide10").click(function () {
                    $("#reponse10").fadeToggle();

                });
                //Q4
                $("#aide11").click(function () {
                    $("#reponse11").fadeToggle();

                });
                //Q5
                $("#aide12").click(function () {
                    $("#reponse12").fadeToggle();

                });
                //Q6
                $("#aide13").click(function () {
                    $("#reponse13").fadeToggle();

                });
                //Q7
                $("#aide14").click(function () {
                    $("#reponse14").fadeToggle();

                });

                //w3school
                // Fenetre se connecter
                var modal = document.getElementById('id01');

                // Fermer la petite fenetre "se connecter" au moindre clic
                window.onclick = function (event) {
                    if (event.target === modal) {
                        modal.style.display = "none";
                    }
                };

                // Fonction rapport (w3school)
                var toggler = document.getElementsByClassName("caret");
                var i;

                for (i = 0; i < toggler.length; i++) {
                    toggler[i].addEventListener("click", function () {
                        this.parentElement.querySelector(".nested").classList.toggle("active");
                        this.classList.toggle("caret-down");
                    });
                }
            });// Fin DOC

            //Code pour changer de theme quand on clique sur le bouton switch
            function fonction_switch() {
                var choix_theme = document.getElementById("switch1");
                if (choix_theme.checked === true) {
                    $(".link_theme").html("<link rel='stylesheet' href='bootstrap/theme/theme2.css'>");
                } else {
                    $(".link_theme").html("<link rel='stylesheet' href='bootstrap/theme/theme1.min.css'>");
                }

            }
            //Code pour afficher le mot de passe à la connexion
            function fonction_voir_mdp() {
                var mdp = document.getElementById("password");
                if (mdp.type === "password") {
                    mdp.type = "text";
                } else {
                    mdp.type = "password";
                }
            }
            //Code pour afficher le mot de passe à la connexion à l'inscription au moment de la confirmation
            function fonction_voir_mdp_inscription() {
                var mdp = document.getElementById("password_conf");
                if (mdp.type === "password") {
                    mdp.type = "text";
                } else {
                    mdp.type = "password";
                }
            }
        </script>
    </body>
</html>