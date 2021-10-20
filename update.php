<?php
include './connexionDB.php';
$nomGateau = $_POST['nomUpdate'];
$DescriptionGateau = $_POST['descriptionUpdate'];
$categorieGateau = $_POST['categorie'];
$id = (int)$_POST['id'];

var_dump($nomGateau,$DescriptionGateau,$categorieGateau,$id);
$requetteUpdate = "UPDATE `gateau` SET `nom`= ?,`description`= ?,`categorie`= ? WHERE id = ?";
$prepaa = $database->prepare($requetteUpdate);
$prepaa->execute([$nomGateau,$DescriptionGateau,$categorieGateau,$id]);
header('location: ./modif.php');


// $arrayGat = $prepa->fetchAll(PDO::FETCH_ASSOC);