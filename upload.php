<?php
include './connexionDB.php';

$uploads_dir_image = './IMAGE_MAQUETTE';
$uploads_dir_video = './videoGateau/video';
var_dump($_FILES['photo']);
// exit;


// $tmp_name = $_FILES['photo']['tmp_name'];
// $name = $_FILES['photo']['name'];

// move_uploaded_file($tmp_name, "$uploads_dir_image/$name");
// move_uploaded_file($tmp_name, "$uploads_dir_video/$name");

// header('location: ./backCake.php');


// $requeteDescription = "INSERT INTO `gateau`( `nom`, `description`, `categorie`) VALUES (?, ?, ?)"; 



// $prep = $database->prepare($requeteDescription);
// $prep->execute(array($_POST['nomCake'],$_POST['descriptionCake'], $_POST['categorie']));

// $requeteDescription = "INSERT INTO `multimedia`(`photo`, `video`, `gateau_id`) VALUES (?, ?, (SELECT id FROM gateau ORDER BY id DESC LIMIT 1))";

// INSERT INTO `multimedia`(`photo`, `video`, `gateau_id`) VALUES ('test','test', (SELECT id FROM gateau ORDER BY id DESC LIMIT 1))
// $regex= '/video*/';
// $regex2 = '/photo*/';

// if($_FILES['photo']['type'] == 'video/mp4'){

//     echo "c'est une video";
    // $prep = $database->prepare($requeteDescription);
    // $prep->execute(array(NULL, "$uploads_dir_video/$name"));
// }
// else {
//     echo "ce n'est pas une video";
// }
// elseif ($_FILES['photo']) {

//     $prep = $database->prepare($requeteDescription);
//     $prep->execute(array("$uploads_dir_image/$name", NULL));
// }

// $prep = $database->prepare($requeteDescription);
// $prep->execute(array("$uploads_dir_image/$name", NULL));
/*
$prep->execute(array("$uploads_dir_image/$name, NULL"));
$prep->execute(array(NULL, "$uploads_dir_video/$name"));*/

// $arrayDesc = $prep->fetchAll(PDO::FETCH_OBJ);

// var_dump($arrayDesc);

// $requeteEnvoiPhoto

















/*$requeteGetPhoto = "SELECT photo FROM multimedia";

$prepa = $database->prepare($requeteGetPhoto);
$prepa->execute();

$arrayPhoto = $prepa->fetchAll(PDO::FETCH_OBJ);*/

/*var_dump($arrayPhoto);
foreach ($arrayPhoto as $key => $value) {
    foreach ($value as  $newValue) {
        echo "<img width='50%' src='".$newValue."' alt='' >";
    }
}*/

?>

