<?php
session_start();
include './connexionDB.php';


?>
<link rel="stylesheet" href="modiff.css">
<body>
<h2>modifier fichier</h2>
    <form action="update.php" method="post" class="modif">
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
                <label for="id"></label>
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="submit" name="submit" value="Enregistrer" >
    </form>

    <a href="./backCake.php">retour</a>
</body>
