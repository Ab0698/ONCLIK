<?php
session_start();
if(isset($_SESSION['users'])){ 
    header("Location:dashboard.php");
    }else{
    
    include('connectdb.php');
//get all users database gestionuser

    $request="SELECT*from user";
    $allUsers=$db->prepare($request);
    $allUsers->execute();
  $listUsers=$allUsers->fetchAll();
 // print_r($listUsers); 

  //$email=$_POST['email'];
  $password=$_POST['password'];
  $username=$_POST['username'];
  //print_r($_POST);
 // $pwd=$_POST['pwd'];
//$pwd=hash('sha256',$_POST['password']);
  //pour voir si les information du formulaire match avec les informations de la bases de donnés
  for($i=0; $i<count($listUsers); $i++){
    if($username==$listUsers[$i]['nom'] && $password==$listUsers[$i]['pwd']){
    //on creer d'abord une session
    $_SESSION['users']= $listUsers[$i];
    $etat=1;
   
    break;
  }else{ 
   $etat=0;
  }
 
}
if($etat==1){
    header(".Location:dashboard.php");
  
}else{
    echo "utilisatieur inexistant!!!";
}

}

    ?>