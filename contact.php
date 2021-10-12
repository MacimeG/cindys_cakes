<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./design.css">
    <title>CINDY'S CAKES</title>
</head>
<body>

    <header class="navbar">
        <img src="./IMAGE_MAQUETTE/NoPath - Copie (15).png" class="mainLogo" alt="">
        <a href="index.html">Accueil</a>
        <a href="sndpage.html">Produit</a>
        <img src="./IMAGE_MAQUETTE/gateau_good_.png" alt="" class="logoNav">
        <a href="contact.php">Contact</a>
        <!-- <p class="admin">connexion admin</p> -->
    </header>
    
    <div class="menuNavbar">
        <a href="index.html">Accueil</a>
        <a href="sndpage.html">Produit</a>
        <a href="contact.php" class="contact">Contact</a>
        <!-- <p>Connexion Admin</p> -->
    </div>

    <section class="contacter">

        <div class="conctactermoi">
            <p>Vous souhaitez me contacter ? N'hésitez plus !</p>
        </div>

            <!-- <div class="formulaire1">

                <label for="nom">Nom:</label>
                <input type="text" name="nom" class="Nom">
            </div>
            <div class="formulaire2">
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" class="Prenom">
            </div>
            <div class="formulaire3">
            
                <label for="email">Adresse Mail:</label>
                <input type="text" name="email" class="Email">
            </div>

            <div class="textemsg">
                <textarea name="textarea" id="textar" cols="62" rows="15" placeholder="Ecrivez votre message ici"></textarea>
                <button class="validemsg">Valider</button>
                <input type="submit" name="validmsg" value="valider">
            </div> -->
            
            <form action="./formu.php" method="post">
                <label for="nom">Nom:</label>
                <input type="text" name="username" class="Nom">

                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" class="Prenom">

                <label for="email">Adresse Mail:</label>
                <input type="email" name="email" class="Email">

                <label for="textarea">ecris ton texte:</label>
                <textarea name="textarea" id="textar" cols="62" rows="15" placeholder="Ecrivez votre message ici"></textarea>

                <span><?php

                if (isset($_SESSION['erreur'])) {

                    echo $_SESSION['erreur'];
                }
                if(isset($_SESSION['victoire'])){
                    echo $_SESSION['victoire'];
                }
               
                ?></span>
               


                <input type="submit" name="validmsg" value="valider" class="validemsg">
            </form>
    </section>
</body>
<script src="./gateau.js" defer></script>
</html>