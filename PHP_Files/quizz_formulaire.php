<?php
if (!isset($_SESSION['login'])) {
    echo("<h1>Tu dois être membre pour avoir accés au quizz ! Connecte-toi ou inscris-toi !</h1> \r\n");
    include('acces_non_autorise.php');
} else {
    ?>

    <h1 style="text-align: center; color: salmon; text-shadow: 3px 2px black; font-family: 'Times New Roman', Times, serif; text-transform: capitalize;"><?php echo($_SESSION['login'] . ", es-tu un gamer ? (Choisis un des deux quizz)");?></h1>

    <!--1er quizz-->
    <form id="quizz" class="justify-content-center rounded-lg float-left" method="POST" action="index.php?choix=quizz_reception" style="margin-left: 130px;">
        <h3 style="text-align: center; color: #d9534f;">PS4/XBOX</h3>
        <div class="question mb-4" style="background-image: url('image/joel_fille.jpg'); background-size: 520px; background-repeat: no-repeat;"> <!--mb-4 = margin bottom-->
            <div class="texte">
                <h2>Question 1 : The Last Of Us</h2>
                <h5>Comment meurt la fille de Joel ? :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r1" name="q1" value="2">Elle se fait mordre par un infecté, et Tommy est contraint de la tuer pour sauver Joel.<br>
                <input type="radio" id="r2" name="q1" value="1">Elle se fait tirer dessus par un militaire venu exterminer toute personne pouvant causer la propagation du virus.<br>
                <input type="radio" id="r3" name="q1" value="3">Elle meurt dans un accident de voiture.</label>
                <br/><br/>
                <h5 id="aide1">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse1">Elle se fait tirer dessus par un militaire venu exterminer toute personne pouvant causer la propagation du virus.</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/fifa.gif'); background-repeat: no-repeat; background-size: 520px;">
            <div class="texte">
                <h2>Question 2 : Fifa 19</h2>
                <h5>Quelle est la date de sortie du jeu dans le monde ? :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r4" name="q2" value="2">27 septembre 2018<br/>
                <input type="radio" id="r5" name="q2" value="3">25 septembre 2019<br/>
                <input type="radio" id="r6" name="q2" value="1">28 septembre 2018<br/></label>
                <h5 id="aide2">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse2">28 septembre 2018</span>
            </div>
        </div>

        <div class="question mb-4" style="background-image: url('image/fort.gif');">
            <div class="texte">
                <h2>Question 3: Fortnite</h2>
                <h5>Comment s'appelle le deuxième mode de Fortnite ? :</h5>
                 <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r7" name="q3" value="2">Un monde à sauver<br/>
                <input type="radio" id="r8" name="q3" value="3">Le monde à besoin d'aide<br/>
                <input type="radio" id="r9" name="q3" value="1">Sauver le monde<br/></label>
                <h5 id="aide3">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse3">Sauver le monde</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/gtav.jpg'); background-size: 460px; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 4: GTA V</h2>
                <h5>Qui sont les 3 personnages du jeu ? :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r10" name="q4" value="2">Michael, Frank et Trevor<br/>
                <input type="radio" id="r11" name="q4" value="1">Michael, Franklin et Trevor<br/>
                <input type="radio" id="r12" name="q4" value="3">Michael, Franklin et Trevis<br/></label>
                <h5 id="aide4">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse4">Michael, Franklin et Trevor</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/Blackops_1.jpg'); background-size: 500px; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 5: Black Ops 4</h2>
                <h5>Dans le mode Zombie, quels sont les noms des 4 dieux de la carte "IX" ? :</h5>
                 <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r13" name="q5" value="2">Zeus, Poséidon, Hadès, Râ<br/>
                <input type="radio" id="r14" name="q5" value="3">Athéna, Zeus, Odin, Râ<br/>
                <input type="radio" id="r15" name="q5" value="1">Dana, Zeus, Odin, Râ<br/></label>
                <h5 id="aide5">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse5">Dana, Zeus, Odin, Râ</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/assassins.jpg'); background-size: 500px; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 6: Assassin's Creed</h2>
                <h5>Comment se nomme le héros des trois premiers Assassin's Creed ? :</h5>
                 <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r16" name="q6" value="1">Altaïr Ibn La-Ahad<br/>
                <input type="radio" id="r17" name="q6" value="2">Connor Kenway<br/>
                <input type="radio" id="r18" name="q6" value="3">Ezio Auditore<br/></label>
                <h5 id="aide6">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse6">Altaïr Ibn La-Ahad</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/mine.jpg'); background-size: 500px; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 7: Minecraft</h2>
                <h5>Y a-t-il un mod qui s'appelle Pixelmon ? :</h5>
                 <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r19" name="q7" value="2">Je ne sais pas<br/>
                <input type="radio" id="r20" name="q7" value="1">Oui<br/>
                <input type="radio" id="r21" name="q7" value="3">Non<br/></label>
                <h5 id="aide7">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse7">Oui</span>
            </div>  
        </div>

        <div class="text-center">
            <button id="bouton" class="btn btn-danger" type="submit" name="submit">Valider mes réponses</button>
        </div>
    </form>

    <!--Deuxieme quizz-->

    <form id="quizz" class="justify-content-center rounded-lg float-right" method="POST" action="index.php?choix=quizz_reception2" style="margin-right: 130px;">
        <h3 style="text-align: center; color: #d9534f;">Nintendo</h3>
        <div class="question mb-4" style="background-image: url('image/mario_.jpg'); background-size: 530px; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 1 : Le monde de Mario</h2>
                <h5>Comment s'appelle l'ennemi(e) juré de Mario :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r22" name="q1" value="1">Bowser<br>
                <input type="radio" id="r23" name="q1" value="2">Peach<br>
                <input type="radio" id="r24" name="q1" value="3">Luigi.</label>
                <br/><br/>
                <h5 id="aide8">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse8">Bowser.</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/mario_friends.jpg'); background-size: 100%; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 2 : Le monde de Mario</h2>
                <h5>De quelle espéce est Yoshi :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r25" name="q2" value="3">Grenouille<br/>
                <input type="radio" id="r26" name="q2" value="2">Tortue<br/>
                <input type="radio" id="r27" name="q2" value="1">Dinosaure<br/></label>
                <h5 id="aide9">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse9">Dinosaure</span>
            </div>
        </div>

        <div class="question mb-4" style="background-image: url('image/zelda.gif'); background-size: 100%; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 3: Zelda</h2>
                <h5>Qui est Zelda ? :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r28" name="q3" value="2">Une paysanne<br/>
                <input type="radio" id="r29" name="q3" value="1">Une princesse<br/>
                <input type="radio" id="r30" name="q3" value="3">Une amie de Link<br/></label>
                <h5 id="aide10">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse10">Une princesse</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/zelda.jpg'); background-size: 100%; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 4: Zelda</h2>
                <h5>Qui est l'ennemie de Link ? :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r31" name="q4" value="2">Zelda<br/>
                <input type="radio" id="r32" name="q4" value="3">Naruto<br/>
                <input type="radio" id="r33" name="q4" value="1">Ganondorf<br/></label>
                <h5 id="aide11">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse11"> Ganondorf</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/dk.jpg'); background-size: 100%; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 5: Donkey Kong </h2>
                <h5>Qui est le meilleur ami de Donkey Kong ? :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r34" name="q5" value="1">Diddy Kong<br/>
                <input type="radio" id="r35" name="q5" value="2">Cranky Kong<br/>
                <input type="radio" id="r36" name="q5" value="3">Funky Kong<br/></label>
                <h5 id="aide12">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse12">Diddy Kong</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/luigi.jpg'); background-size: 100%; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 6: Luigi</h2>
                <h5>Je suis très grand, je suis l'ennemi de Luigi, qui suis-je ? :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r37" name="q6" value="2">Wario<br/>
                <input type="radio" id="r38" name="q6" value="1">Waluigi<br/>
                <input type="radio" id="r39" name="q6" value="3">Mario<br/></label>
                <h5 id="aide13">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse13">Waluigi</span>
            </div>  
        </div>

        <div class="question mb-4" style="background-image: url('image/rayman_origins.jpg'); background-size: 500px; background-repeat: no-repeat;">
            <div class="texte">
                <h2>Question 7: rayman origins</h2>
                <h5>Que se passe-t-il lors de la cinématique de fin ? :</h5>
                <label style="background-color: rgba(255, 255, 255, 0.5);"><input type="radio" id="r40" name="q7" value="3">Rayman et ses amis gagnent un ultime combat<br/>
                <input type="radio" id="r41" name="q7" value="2">Rayman et ses amis dansent pour fêter leur victoire<br/>
                <input type="radio" id="r42" name="q7" value="1">Rayman et ses amis se rendorment<br/></label>
                <h5 id="aide14">(cliquez ici si vous voulez voir la réponse)</h5>
                <span class="reponse" id="reponse14">Rayman et ses amis se rendorment.</span>
            </div>  
        </div>

        <div class="text-center" style="margin-top: 110px;">
            <button id="bouton" class="btn btn-danger" type="submit" name="submit">Valider mes réponses</button>
        </div>
    </form>
    <?php
}
?>