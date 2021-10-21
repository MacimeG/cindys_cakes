<?php
include './connexionDB.php';

  var_dump($_GET['id']);
$requeteDelete = "DELETE FROM `multimedia` WHERE gateau_id = ?";



$prepp = $database->prepare($requeteDelete);
$prepp->execute([$_GET['id']]);




$requeteDelete2 = "DELETE FROM `gateau` WHERE id = ?";
$prepaa = $database->prepare($requeteDelete2);
$prepaa->execute([$_GET['id']]);
header('location: ./backCake.php');