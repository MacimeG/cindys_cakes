<?php
function cleanUp($input){
    $input = htmlspecialchars($input); 
    $input = stripslashes($input);
    $input = trim($input);
    return $input;
}