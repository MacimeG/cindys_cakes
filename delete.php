<?php
include './connexionDB.php';

  var_dump($_GET['id']);
$requeteDelete = "DELETE FROM `multimedia` WHERE gateau_id = ?";

$prepp = $database->prepare($requeteDelete);

$prepp->execute([$_GET['id']]);

header('location: ./backCake.php');