<?php
session_start();
include('connectdb.php');
if(isset($_SESSION['users'])){

    if(isset($_POST['id_m'])){
        $id=$_POST['id_m'];
        $request=$db->prepare("DELETE FROM user WHERE id_user=? ");
        $request->execute(array($id));
        if($request){
            echo "reussi";
            header("Location:dashboard.php");
        }else {
    echo "echoue";
        }
    }
}else{
    echo "la session n'existe pas";
}
