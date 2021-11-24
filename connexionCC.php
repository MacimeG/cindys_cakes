<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./coAdmin.css">
    <title>Document</title>
</head>
<body>
   <h2>Connectez-vous</h2>
<form action="./traitementAdmin.php" method="post" class="formulaire">
    <label for="pseudo">Pseudo</label>
    <input type="text" name= "pseudo" id = "pseudo" placeholder ="pseudo" class="pseudo">

    <label for="mdp">Mot De Passe</label>
    <input type="password" name= "mdp" id = "mdp" placeholder ="mot de passe" class="mdp">

    <span><?php

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
}  
  


?></span>
    <input type="submit" name="valid" class="valid" value="Validé" id = "valid">
</form>
<a href="./index.html">retour</a>
</body>
</html>