<?php
include './connexionDB.php';

$requeteGetPhoto = "SELECT photo FROM multimedia WHERE gateau_id = ?";

$prepa = $database->prepare($requeteGetPhoto);


$requeteGetNom = "SELECT * FROM `gateau`";

$prep = $database->prepare($requeteGetNom);

$prep->execute();

$arrayNom = $prep->fetchAll(PDO::FETCH_ASSOC);


$requeteGetVideo = "SELECT  video FROM multimedia WHERE gateau_id = ?";

$prepar = $database->prepare($requeteGetVideo);


