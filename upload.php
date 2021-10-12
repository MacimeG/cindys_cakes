<?php

$uploads_dir = './IMAGE_MAQUETTE';


$tmp_name = $_FILES['photo']['tmp_name'];
$name = $_FILES['photo']['name'];
move_uploaded_file($tmp_name, "$uploads_dir/$name");
var_dump($_FILES['photo']);
header('location: ./backCake.php');
?>

