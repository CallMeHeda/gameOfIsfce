<h1 class="text-center" style="text-shadow: 0.1em 0.1em 0.05em #333">Ajoutez un nouveau jeu :</h1>
<div class="anthem_img" style="border: 1px solid transparent;">
    <form id="form_ajout_jeux" class="justify-content-center" method="POST" action="index.php?choix=ajout_jeux_reception">
        <div class='form-group'>
            <label for="titre">Titre : </label> 
            <input  name="titre" type="text" class="form-control" value='' autofocus required>
        </div>

        <div class='form-group'>
            <label for="plateforme">Plateforme : </label> 
            <select class="form-control" id="plateforme" name="plateforme">
                <option id="plateforme">Playstation 4</option>
                <option id="plateforme">Xbox One</option>
                <option id="plateforme">Nintendo Switch</option>
                <option id="plateforme">Steam</option>
            </select>
        </div>

        <div class='form-group'>
            <label for="editeur">Editeur : </label> 
            <input id="editeur" name="editeur" type="text" class="form-control">
        </div>

        <div class='form-group'>
            <label for="date_de_sortie">Date de sortie : </label> 
            <input id="date_de_sortie" name="date_de_sortie" type="date" class="form-control" required>
        </div>

        <div class='form-group'>
            <label for="prix">Prix : </label> 
            <input id="prix" name="prix" type="number" min="0" step="0.01" value="0" class="form-control" required>
        </div>

        <div class='form-group'>
            <label for="synopsis"> Synopsis : </label><br/>
            <textarea id="synopsis" name="synopsis" rows="5" cols="40"> </textarea>
        </div>

        <div class='custom-file mb-3'>
            <label for="libre2">Image / GIF (background) : </label> 
            <input id="libre2" name="libre2" type="file">
        </div>

        <div class="custom-file mb-3" id="ajout_image">
            <label for="libre1">Télécharger une image :</label>
            <input type="file" id="libre1" name="libre1" required>
        </div>

        <div class='bouton_ajout_jeux form-group text-center'>
            <input type="submit" value="Ajouter le jeu" class='btn btn-danger'>
        </div>
    </form>
</div>