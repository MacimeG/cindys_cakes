<?php
session_start();
include './connexionDB.php';

$uploads_dir_image = './IMAGE_MAQUETTE';
$uploads_dir_video = './videoGateau/video';

var_dump($_FILES['photo']);
// exit;


$tmp_name = $_FILES['photo']['tmp_name'];
$name = $_FILES['photo']['name'];




// header('location: ./backCake.php');


// $requeteDescription = "INSERT INTO `gateau`( `nom`, `description`, `categorie`) VALUES (?, ?, ?)"; 

// $prep = $database->prepare($requeteDescription);
// $prep->execute(array($_POST['nomCake'],$_POST['descriptionCake'], $_POST['categorie']));

// $requeteDescription = "INSERT INTO `multimedia`(`photo`, `video`, `gateau_id`) VALUES (?, ?, (SELECT id FROM gateau ORDER BY id DESC LIMIT 1))";

// INSERT INTO `multimedia`(`photo`, `video`, `gateau_id`) VALUES ('test','test', (SELECT id FROM gateau ORDER BY id DESC LIMIT 1))
// $regex= '/video*/';
// $regex2 = '/photo*/';


$extensionsvideo = array("video/mp4", "video/mov", "video/avi", "video/flv", "video/wmv");
$extensionPhoto = array("image/gif", "image/jpeg", "image/png", "image/svg");

if($_FILES['photo']['type'] === "" || $_POST['nomCake'] === "" ||  $_POST['descriptionCake'] == ""){
    echo "il est vide";
}
else{

            $requeteDescription = "INSERT INTO `gateau`( `nom`, `description`, `categorie`) VALUES (?, ?, ?)"; 
            $prep = $database->prepare($requeteDescription);
            $prep->execute(array($_POST['nomCake'],$_POST['descriptionCake'], $_POST['categorie']));

            $requeteDes = "INSERT INTO `multimedia`(`photo`, `video`, `gateau_id`) VALUES (?, ?, (SELECT id FROM gateau ORDER BY id DESC LIMIT 1))";

    if(in_array($_FILES['photo']['type'], $extensionsvideo)){
        move_uploaded_file($tmp_name, "$uploads_dir_video/$name");
        echo "c'est une video";
        $prep = $database->prepare($requeteDes);
        $prep->execute(array(NULL, "$uploads_dir_video/$name"));
        
    }
    elseif(in_array($_FILES['photo']["type"], $extensionPhoto)){
    
        move_uploaded_file($tmp_name, "$uploads_dir_image/$name");
        $prep = $database->prepare($requeteDes);
        $prep->execute(array("$uploads_dir_image/$name", NULL));
        
    }
    else{
        $_SESSION['format']= "<h3>ce n'est pas le bon format<h3>";
    }
    
    header('location: ./backCake.php');
}

// ici la requete et la boucle pour faire afficher toute les photos de ma base de données. CSS a faire 


// $requeteGetPhoto = "SELECT photo FROM multimedia";

// $prepa = $database->prepare($requeteGetPhoto);
// $prepa->execute();

// $arrayPhoto = $prepa->fetchAll(PDO::FETCH_OBJ);

// var_dump($arrayPhoto);
// foreach ($arrayPhoto as $key => $value) {
//     foreach ($value as  $newValue) {
//         echo "<img width='100px' src='".$newValue."' alt='' >";
//     }
// }

// header('location: backCake.php');
// Requete pour supprimer les photos, ou video, mais avant sa un peu de CSS coté front et meme coté back 
