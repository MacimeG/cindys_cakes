<?php

$requeteGetPhoto = "SELECT photo FROM multimedia";

$prepa = $database->prepare($requeteGetPhoto);
$prepa->execute();

$arrayPhoto = $prepa->fetchAll(PDO::FETCH_OBJ);

// var_dump($arrayPhoto);
// foreach ($arrayPhoto as $key => $value) {
//     foreach ($value as  $newValue) {
//         echo "<img width='100px' src='".$newValue."' alt='' >";
//     }
// }