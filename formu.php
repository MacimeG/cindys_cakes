<?php
$username =  htmlspecialchars($_POST['username']);
$name =  htmlspecialchars($_POST['name']);
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
        $name = cleanInput($name);

        if(isset($mail) && !empty($mail)){
            filter_var(cleanInput($mail, FILTER_VALIDATE_EMAIL));
           

            if(isset($area) && !empty($area)){
                $area = cleanUp($area);
                $_SESSION['victoire'] = "Votre message a bien étais envoyer";
            }
            else{
                $_SESSION['erreur'] = "VEUILLEZ ENTREZ DU TEXT";
                header('location: ./contact.html');
            }
        }
        else{
            $_SESSION['erreur'] = "VEUILLEZ ENTREZ UN MAIL VALIDE";
            header('location: ./contact.html');
        }
    } 
    else{
        $_SESSION['erreur'] = "MAUVAIS FIRST NAME";
        header('location: ./contact.html');
    }
}
else{
    $_SESSION["erreur"] = "Mauvais nom";
    header('location: ./contact.html');
}

//  if(isset($_POST['username']) &&!empty($_POST['username']))
     
//     echo htmlspecialchars($_POST['username']);



//  if(isset($_POST['prenom']) &&!empty($_POST['prenom']))
     
//     echo htmlspecialchars($_POST['prenom']);


//  if(isset($_POST['email']) &&!empty($_POST['email']))
     
//     echo htmlspecialchars($_POST['email']);


//  if(isset($_POST['textarea']) &&!empty($_POST['textarea']))
     
//     echo htmlspecialchars($_POST['textarea']);
 
?>