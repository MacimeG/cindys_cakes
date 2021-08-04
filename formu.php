<?php
 if(isset($_POST['username']) &&!empty($_POST['username']))
     
    echo htmlspecialchars($_POST['username']);



 if(isset($_POST['prenom']) &&!empty($_POST['prenom']))
     
    echo htmlspecialchars($_POST['prenom']);


 if(isset($_POST['email']) &&!empty($_POST['email']))
     
    echo htmlspecialchars($_POST['email']);


 if(isset($_POST['textarea']) &&!empty($_POST['textarea']))
     
    echo htmlspecialchars($_POST['textarea']);
 
?>