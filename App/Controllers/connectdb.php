<?php

try{
//pour lier mabase de donnée au programme
    $db= new PDO('mysql:host=localhost;dbname=cv_onclick','root','');
   // return $db;
    }catch(Exception $e){
            die('Erreur:' .$e->getMessage());
        }
    
 ?>