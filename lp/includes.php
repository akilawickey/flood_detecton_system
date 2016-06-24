<?php
include_once ('config.php');

try{
   $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);
   echo('connected');

}catch (PDOException $e){
    echo ('Database error '.print_r($e,true));
    exit('Database error '.print_r($e,true));
} 



// Inialize session
//session_start();







