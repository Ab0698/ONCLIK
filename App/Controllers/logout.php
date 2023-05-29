<?php
session_start();
if(isset($_SESSION['users'])){ 
session_destroy();
//}else{
    

header("Location:../Views/users/connexion.php");
}

    ?>
