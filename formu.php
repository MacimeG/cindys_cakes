<?php
include './clean.php';
session_start();
$username =  cleanUp($_POST['username']);
$name =  cleanUp($_POST['prenom']);
$mail =  cleanUp($_POST['email']);
$area =  cleanUp($_POST['textarea']);



if(isset($username) && !empty($username)){
   

    if(isset($name) && !empty($name)){
       

        if(isset($mail) && !empty($mail)){
            filter_var($mail, FILTER_VALIDATE_EMAIL);
           

            if(isset($area) && !empty($area)){
              
                $dest = "maxime.glaneux@gmail.com";
                $sujet = "Cindy Cakes";
                $corp = "$area";
                $headers = "From: $mail";
                if (mail($dest, $sujet, $corp, $headers)) {
                    $_SESSION['victoire'] = "Votre message a bien étais envoyer a $dest";
                    header('location: ./contact.php');
                } else {
                    $_SESSION['erreur'] = "Échec de l'envoi de l'email...";
                    header('location: ./contact.php');
                }
                
            }
            else{
                $_SESSION['erreur'] = "Veuillez entrez du texte";
                header('location: ./contact.php');
            }
        }
        else{
            $_SESSION['erreur'] = "Veuillez entrez une adresse mail valide";
            header('location: ./contact.php');
        }
    } 
    else{
        $_SESSION['erreur'] = "Mauvais prenom";
        header('location: ./contact.php');
    }
}
else{
    $_SESSION["erreur"] = "Mauvais nom";
    header('location: ./contact.php');
}

//  if(isset($_POST['username']) &&!empty($_POST['username']))
     
//     echo htmlspecialchars($_POST['username']);



//  if(isset($_POST['prenom']) &&!empty($_POST['prenom']))
     
//     echo htmlspecialchars($_POST['prenom']);


//  if(isset($_POST['email']) &&!empty($_POST['email']))
     
//     echo htmlspecialchars($_POST['email']);


//  if(isset($_POST['textarea']) &&!empty($_POST['textarea']))
     
//     echo htmlspecialchars($_POST['textarea']);
