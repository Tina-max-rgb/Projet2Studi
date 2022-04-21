<?php
try{

$pdo=new PDO("mysql:host=localhost;dbname=hypnos","root","Tina1994");

}catch(Exception $e){
    die('error :' .$e->getMessage());
}

?>