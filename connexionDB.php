<?php
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_DATABASE','cindy');
define('DB_USERNAME', 'cindy'); 
define('DB_PASSWORD', 'cindycake');

$database = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);