<?php
session_start();
$username =  htmlspecialchars($_POST['username']);
$name =  htmlspecialchars($_POST['prenom']);
$mail =  htmlspecialchars($_POST['email']);
$area =  htmlspecialchars($_POST['textarea']);

function cleanUp($input){
    $input = stripslashes($input);
    $input = trim($input);
    return $input;
}

if(isset($username) && !empty($username)){
    $username = cleanUp($username);

    if(isset($name) && !empty($name)){
        $name = cleanUp($name);

        if(isset($mail) && !empty($mail)){
            filter_var(cleanUp($mail, FILTER_VALIDATE_EMAIL));
           

            if(isset($area) && !empty($area)){
                $area = cleanUp($area);
                $dest = "maxime.glaneux@gmail.com";
                $sujet = "Cindy Cakes";
                $corp = "$area";
                $headers = "From: $mail";
                var_dump(mail($dest, $sujet, $corp, $headers));
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
