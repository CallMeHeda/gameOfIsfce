<h4 id='rapport_titre' class="text-center">Rapport : Listes déroulantes</h4>
<?php
if (isset($_SESSION['login'])) {
    ?>
    <ul id="myUL">
        <li class=""><span class="caret">Fonctionnalité</span>
            <ul class="nested">
                <li>
                    <p>Bienvenu sur Game Of Isfce, &nbsp; <?php echo($_SESSION['login']); ?> ! <br/>
                        Tout commence par un bouton "Press Start" .. Une fois le bouton cliqué, vous pouvez choisir entre visiter directement le site,
                        vous connectez ou vous inscrire. Mais ça, vous le savez déjà puisque vous êtes arrivé jusqu'ici ! <br/>
                        Lors de l'inscription, le nouveau membre devra valider son mot de passe en le confirmant. <br/>
                        Sur la page d'accueil vous retrouverez un carousel (fait avec bootstrap 4), par defaut il y a tout les jeux de votre base de données. <br/>
                        Via le carousel, vous pouvez choisir entre afficher tout les jeux, afficher les live twitch ou les live youtube. <br/>
                        L'utilisateur peut faire une recherche par titre s'il le souhaite. <br/>
                        La partie jeux video, vous permet de voir les jeux d'une plateforme selectionnée à partir des logos. <br/>
                        J'ai mis à disposition, des membres connectés, un quizz. Il y a deux quizz, un quizz comportant des questions sur les jeux PS4/XBOX et
                        un autre qui comporte des questions sur les jeux Nintendo. <br/>
                        Il aura la possibilité de voir les réponses, s'il le souhaite. <br/>
                        A la validation du quizz, l'utilisateur pourra avoir accès à ses points et au classement du quizz effectué.
                        Il peut aussi refaire le quizz s'il souhaite améliorer ses points. <br/>
                        Les jeux sont ajoutés par l'admin qui est bob_1040 et dont le mot de passe est isfce1040.
                        Bob peut ajouter des jeux mais aussi les supprimer, et seul lui peut effectuer ces actions. <br/>
                        A l'ajout d'un jeux, il faut, en plus d'introduire les informations, insérer une image qui correspondra à la pochette du jeux
                        (stockée dans libre1) et une image (gif ou autre stockée dans libre2) qui servira de background-image (facultative). <br/>
                        Sur la navigation, vous pouvez appercevoir un bouton switch qui vous permet de changer le thème du site (choix entre un thème sombre ou un
                        thème plus clair). <br/>
                        Sur le footer, il y a en plus du logo du site, des icones qui vous redirige vers les réseaux sociaux (Facebook, Twitter,
                        Instagram, google+ qui vous envoie directement vers votre boite mail si vous souhaiter me contacter (gameofisfce@gmail.com),
                        et une icone pour revenir en haut de la page). Faisons comme si ces icones vous redirigez vers les pages officielles du site :) <br/>
                        Ma navigation est en sticky-top.</p>
                </li>
            </ul>
    </ul>

    <ul id="myUL">
        <li><span class="caret">JQuery</span>
            <ul class="nested">
                <li id='li_classBoot'>Validation formulaire d'inscription (login minimum 6 caractéres, mot de passe min 3 car & 2 chiffres).</li>
                <li id='li_classBoot'>Filtrage des jeux sur plateforme (page jeux video).</li>
                <li id='li_classBoot'>Filtrage sur carousel (jeux, live twitch ou live youtube).</li>
                <li id='li_classBoot'>Recherche de jeux sur titre (page d'accueil).</li>
                <li id='li_classBoot'>Montrer/cacher les réponses du quizz.</li>
                <li id='li_classBoot'>Fenêtre de connexion "modal" (code pris sur w3school).</li>
                <li style="color: #d9534f;">JQuery start.php :</li>
                <li id='li_classBoot'>Cacher le header, la navigation et le footer</li>
                <li id='li_classBoot'>Afficher les boutons "vers le site", "se connecter" et "s'inscrire"</li>
                <li id='li_classBoot'>Afficher les formulaires d'inscription</li> 
            </ul>
    </ul>

    <ul id="myUL">
        <li><span class="caret">Fonctions</span>
            <ul class="nested">
                <li>Les fonctions ont été mises après le document.ready, &nbsp; ça ne fonctionnait pas autrement.<li><br/>
                <li id='li_classBoot'>Fonction pour changer de thème (modification de la balise link au click).</li>
                <li id='li_classBoot'>Fonction pour voir le mot de passe lors de la connexion.</li>
                <li id='li_classBoot'>Fonction pour voir le mot de passe lors de l'inscription.</li>
            </ul>
    </ul>
 
    <ul id="myUL">
        <li><span class="caret">Classes Bootstrap</span>
            <ul class="nested">
                <li id='li_classBoot'>Card</li>
                <li id='li_classBoot'>Carousel</li>
                <li id='li_classBoot'>switch</li>
                <li id='li_classBoot'>spinner-grow</li>
                <li id='li_classBoot'>row</li>
                <li id='li_classBoot'>Sm- / col-sm-</li>
                <li id='li_classBoot'>float-left / float-right</li>
                <li id='li_classBoot'>sticky-top</li>
                <li id='li_classBoot'>justify-content-center</li>
                <li id='li_classBoot'>img-fluid</li>
                <li id='li_classBoot'>img-thumbnail</li>
                <li id='li_classBoot'>bg-danger / btn-danger</li>
                <li id='li_classBoot'>table</li>
                <li id='li_classBoot'>offset-sm-3</li>
                <li id='li_classBoot'>mb / mt (margin bottom / top)</li>
                <li id='li_classBoot'>modal</li>
                <li id='li_classBoot'>...</li>
            </ul>
    </ul>
    <?php
} else {
    ?>
    <ul id="myUL">
        <li><span class="caret">Fonctionnalité</span>
            <ul class="nested">
                <li>
                    <p>Bienvenu sur Game Of Isfce ! <br/>
                        Tout commence par un bouton "Press Start" .. Une fois le bouton cliqué, vous pouvez choisir entre visiter directement le site,
                        vous connectez ou vous inscrire. Mais ça, vous le savez déjà puisque vous êtes arrivé jusqu'ici ! <br/>
                        Lors de l'inscription, le nouveau membre devra valider son mot de passe en le confirmant. <br/>
                        Sur la page d'accueil vous retrouverez un carousel (fait avec bootstrap 4), par defaut il y a tout les jeux de votre base de données. <br/>
                        Via le carousel, vous pouvez choisir entre afficher tout les jeux, afficher les live twitch ou les live youtube. <br/>
                        L'utilisateur peut faire une recherche par titre s'il le souhaite. <br/>
                        La partie jeux video, vous permet de voir les jeux d'une plateforme selectionnée à partir des logos. <br/>
                        J'ai mis à disposition, des membres connectés, un quizz. Il y a deux quizz, un quizz comportant des questions sur les jeux PS4/XBOX et
                        un autre qui comporte des questions sur les jeux Nintendo. <br/>
                        Il aura la possibilité de voir les réponses, s'il le souhaite. <br/>
                        A la validation du quizz, l'utilisateur pourra avoir accès à ses points et au classement du quizz effectué.
                        Il peut aussi refaire le quizz s'il souhaite améliorer ses points. <br/>
                        Les jeux sont ajoutés par l'admin qui est bob_1040 et dont le mot de passe est isfce1040.
                        Bob peut ajouter des jeux mais aussi les supprimer, et seul lui peut effectuer ces actions. <br/>
                        A l'ajout d'un jeux, il faut, en plus d'introduire les informations, insérer une image qui correspondra à la pochette du jeux
                        (stockée dans libre1) et une image (gif ou autre stockée dans libre2) qui servira de background-image (facultative). <br/>
                        Sur la navigation, vous pouvez appercevoir un bouton switch qui vous permet de changer le thème du site (choix entre un thème sombre ou un
                        thème plus clair). <br/>
                        Sur le footer, il y a en plus du logo du site, des icones qui vous redirige vers les réseaux sociaux (Facebook, Twitter,
                        Instagram, google+ qui vous envoie directement vers votre boite mail si vous souhaiter me contacter (gameofisfce@gmail.com),
                        et une icone pour revenir en haut de la page). Faisons comme si ces icones vous redirigez vers les pages officielles du site :) <br/>
                        Ma navigation est en sticky-top.</p>
                </li>
            </ul>
    </ul>
    
    <ul id="myUL">
        <li><span class="caret">JQuery</span>
            <ul class="nested">
                <li id='li_classBoot'>Validation formulaire d'inscription (login minimum 6 caractéres, mot de passe min 3 car & 2 chiffres).</li>
                <li id='li_classBoot'>Filtrage des jeux sur plateforme (page jeux video).</li>
                <li id='li_classBoot'>Filtrage sur carousel (jeux, live twitch ou live youtube).</li>
                <li id='li_classBoot'>Recherche de jeux sur titre (page d'accueil).</li>
                <li id='li_classBoot'>Montrer/cacher les réponses du quizz.</li>
                <li id='li_classBoot'>Fenêtre de connexion "modal" (code pris sur w3school).</li>
                <li style="color: #d9534f;">JQuery start.php :</li>
                <li id='li_classBoot'>Cacher le header, la navigation et le footer</li>
                <li id='li_classBoot'>Afficher les boutons "vers le site", "se connecter" et "s'inscrire"</li>
                <li id='li_classBoot'>Afficher les formulaires d'inscription</li>
            </ul>
    </ul>

    <ul id="myUL">
        <li><span class="caret">Fonctions</span>
            <ul class="nested">
                <li>Les fonctions ont été mises après le document.ready, &nbsp; ça ne fonctionnait pas autrement.<li><br/>
                <li id='li_classBoot'>Fonction pour changer de thème (modification de la balise link au click).</li>
                <li id='li_classBoot'>Fonction pour voir le mot de passe lors de la connexion.</li>
                <li id='li_classBoot'>Fonction pour voir le mot de passe lors de l'inscription.</li>
            </ul>
    </ul>
 
    <ul id="myUL">
        <li><span class="caret">Classes Bootstrap</span>
            <ul class="nested">
                <li id='li_classBoot'>Card</li>
                <li id='li_classBoot'>Carousel</li>
                <li id='li_classBoot'>switch</li>
                <li id='li_classBoot'>spinner-grow</li>
                <li id='li_classBoot'>row</li>
                <li id='li_classBoot'>Sm- / col-sm-</li>
                <li id='li_classBoot'>float-left / float-right</li>
                <li id='li_classBoot'>sticky-top</li>
                <li id='li_classBoot'>justify-content-center</li>
                <li id='li_classBoot'>img-fluid</li>
                <li id='li_classBoot'>img-thumbnail</li>
                <li id='li_classBoot'>bg-danger / btn-danger</li>
                <li id='li_classBoot'>table</li>
                <li id='li_classBoot'>offset-sm-3</li>
                <li id='li_classBoot'>mb / mt (margin bottom / top)</li>
                <li id='li_classBoot'>modal</li>
                <li id='li_classBoot'>...</li>
            </ul>
    </ul>
<?php } ?>
<h4><a href="https://gameofisfce.000webhostapp.com/" target="_blank">Lien de l'hebergement.</a></h4>