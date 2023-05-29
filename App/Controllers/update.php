<?php

include_once('../Views/users/header.php');
    //session_start();
    include_once('connectdb.php');
    //get user by id databasse gestionuser
    $request="SELECT* from user where id_user=".$_POST['id_m']."";
    $allUsers=$db->prepare($request);
    $allUsers->execute();
    $listUsers=$allUsers->fetch();
    print_r($listUsers);
?>

<!--div class="container">
    <div class="row">
        <div class="col-md-4">-->
            <h2>Modification user <?php echo $_POST['id_m'] ?> </h2>
            <form  method="POST" action="modifier.php">
                <div class="mb-3">
                    <label  class="form-label">nom</label>
                    <input type="text" class="form-control" name="nom" value="<?php echo $listUsers['nom'];?>">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $listUsers['email'];?>" disabled>
                
                </div> 
            
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="pwd" value="<?php echo $listUsers['pwd'];?>">
                    <input type="hidden" value="1" name="niveau">
                </div>
                
                <input type="hidden" name="id_m" value="<?php echo $_POST['id_m']; ?>">
                <div class="col-auto">
                <button class="btn btn-primary">Modifier</button>
                </div>
            </form>
             