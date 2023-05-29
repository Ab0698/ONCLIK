<?php
include_once('connectdb.php');

    $nom=$_POST['nom'];
    $pwd=$_POST['pwd'];
     //$password=hash('sha256',$password);
     $request="UPDATE user SET nom=?,pwd = ? WHERE id_user=".$_POST['id_m']."";
     $res=$db->prepare($request);
     $res->execute(array($nom, $pwd));
     $id=$_POST['id_m'];
     print_r($_POST);
    //metrre à jour les informations dans la bd
    
       
        //$update="UPDATE FROM `user`(`pseudo`,`password`,`id`) SET(:pseudo,:email,:password,:niveau) WHERE id=:$id";
       if($res){
        echo "Données modifiés";
        header("Location:dashboard.php");
    } else{
       // die('Erreur:' .$e->getMessage());
        //header("Location:update.php");
        echo "Données pas modifiés";
    }
?>