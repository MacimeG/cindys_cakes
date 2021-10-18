<?php
include './connexionDB.php';
$requeteGetPhoto = "SELECT photo, gateau_id	 FROM multimedia";

$prepa = $database->prepare($requeteGetPhoto);
$prepa->execute();

$arrayPhoto = $prepa->fetchAll(PDO::FETCH_ASSOC);


$requeteGetNom = "SELECT `id`, `nom`, `description` FROM `gateau` WHERE id = ?";

 $prep = $database->prepare($requeteGetNom);

// header('location: ./backCake.php');
// $requeteGetNom = "SELECT `id`, `nom`, `description` FROM `gateau`";

// $prep = $database->prepare($requeteGetNom);
// $prep->execute();

// $arrayNom = $prep->fetchAll(PDO::FETCH_ASSOC);

// var_dump($arrayNom);
// $prepare
// var_dump($arrayPhoto);
// foreach ($arrayPhoto as $key => $value) {
//     foreach ($value as  $newValue) {
//         echo "<img width='100px' src='".$newValue."' alt='' >";
//     }
// }