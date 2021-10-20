<?php
include './connexionDB.php';
include './update.php';

// $requetteUpdate = "UPDATE `gateau` SET `nom`=?,`description`=?,`categorie`=? WHERE id = ?"
// $prepa = $database->prepare($requetteUpdate);
// $prepa->execute([$_POST['nomUpdate'], $_POST['descriptionUpdate'], $_GET['id']]);
?>
    <form action="update.php" method="post">
                <label for="nom">Nom:</label>
                <input type="text" name="nomUpdate" class="Nom">

                <label for="description">Description:</label>
                <input type="text" name="descriptionUpdate" class="Prenom">

                <select name="categorie" id="categorie">
                    <option value="">--Catégorie--</option>
                    <option value="super héros">super heros</option>
                    <option value="dessin animé">dessin animé</option>
                    <option value="jeux video">jeux video</option>
                    <option value="film">film</option>
                </select>

                <input type="submit" name="submit" value="Enregistrer" >
    </form>

