<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coAdmin.css">
    <title>Document</title>
</head>
<body>
   <h2>Connectez-vous</h2>
<form action="./traitementAdmin.php" method="post" class="formulaire">
    <label for="pseudo"></label>
    <input type="text" name= "pseudo" id = "pseudo" placeholder ="pseudo">

    <label for="mdp"></label>
    <input type="text" name= "mdp" id = "mdp" placeholder ="mot de passe">

    <span><?php

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
}  
  


?></span>
    <input type="submit" name="valid" class="valid" value="Validé" id = "valid">
</body>
</html>