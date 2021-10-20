<?php

$nomGateau = $_POST['nomUpdate'];
$DescriptionGateau = $_POST['descriptionUpdate'];
$categorieGateau = $_POST['categorie'];


$requetteUpdate = "UPDATE `gateau` SET `nom`= $nomGateau,`description`= $DescriptionGateau,`categorie`= $categorieGateau WHERE id = ?";
$prepaa = $database->prepare($requetteUpdate);
$prepaa->execute([ $_GET['id']]);


// $arrayGat = $prepa->fetchAll(PDO::FETCH_ASSOC);