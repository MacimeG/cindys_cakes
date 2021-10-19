<?php
include './connexionDB.php';

$requeteGetPhoto = "SELECT photo FROM multimedia WHERE gateau_id = ?";

$prepa = $database->prepare($requeteGetPhoto);



$requeteGetNom = "SELECT * FROM `gateau`";

$prep = $database->prepare($requeteGetNom);

$prep->execute();

$arrayNom = $prep->fetchAll(PDO::FETCH_ASSOC);

// var_dump($arrayNom);

// var_dump($arrayPhoto);

// foreach ($arrayNom as $key => $value) {
//     if ($value['categorie']==="dessin animé") {
//         // var_dump($value['id']);
//         $prepa->execute([$value['id']]);
//         $arrayPhoto = $prepa->fetchAll(PDO::FETCH_ASSOC);
//         echo "<img src='".$arrayPhoto[0]['photo']."'alt='' srcset='' width='150em'>";
//         echo $arrayNom[0]["description"];
        
//     }
// }