<?php
include './connexionDB.php';
session_start();

$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['mdp']);


function cleanInput($input){
    // $input = htmlspecialchars($input);
    $input = stripslashes($input); //enleve les antislash
    $input = trim($input); // enleve les espace supplementaire
        return $input;
}


// ICI NOUS PREPARONS, DEFINISSON ET EXECUTE DES REQUETTES SQL.

$newRequete ="SELECT * FROM `user` WHERE id = 1 ";

$prepa = $database->prepare($newRequete);
$prepa->execute(array());

$array = $prepa->fetchAll(PDO::FETCH_OBJ);

var_dump($array[0]->pseudo); //Pour recupéré le pseudo dans la base de données.





if(isset($pseudo) && !empty($pseudo) && $pseudo != $array[0]->pseudo){
    $pseudo = cleanInput($pseudo);
    $_SESSION['error'] = "rentrez un mot de passe svp";
    header('location: ./connexionCC.php');
    
    
}
elseif(isset($password) && !empty($password) && $password != $array[0]->password){
    $_SESSION['error'] = "mettre le bon mot de passe svp";
    header('location: ./connexionCC.php');
}

elseif(empty($pseudo) && !empty($password)){
    $_SESSION['error'] = "rentrez des informations svp";
    header('location: ./connexionCC.php');
}
elseif(isset($pseudo) && empty($password)){
    $_SESSION['error'] = "rentrez un mot de passe";
    header('location: ./connexionCC.php');
}
else{
    header('location: ./backCake.php');
}


