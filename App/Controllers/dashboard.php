<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>DASH</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/css/dashboard.css"  type="text/css"rel="stylesheet">
  </head>

  <body>
         <div class="container">
       <div class="starter-template">
        <h1><span class="glyphicon glyphicon-cog "></span>DASHBOARD</h1>
             <ol class="breadcrumb">
                <li><a href="#">MODEL CV</a></li>
                <li><a href="#">parametres</a></li>
                <li><a href="#">Contact</a></li> 
                
             </ol>
        </div>

      </div>

    <div class="container">
         <div class="row">
            <section class="col-lg-3">
  

                 <div class="list-group">
                     <a href="" class="list-group-item active">ADMINISTRATION</a>
                     <a href="" class="list-group-item">AJOUTER UN ADMINISTRATEUR</a>
                     <a href="" class="list-group-item">SUPPRIMER UN CLIENTS</a>
                     <a href="" class="list-group-item">AJOUTER UN CLIENTS</a>
                 </div>
 
                 <div class="list-group">
                    <a href="" class="list-group-item active">MODEL CV</a>
                    <a href="" class="list-group-item">AJOUTER</a>
                    <a href="" class="list-group-item">SUPPRIMER</a>

                </div>
                    
                <div class="list-group">
                    <a href="" class="list-group-item active">ADMIN_CLIENTS</a>
                    <a href="" class="list-group-item">A PROPOS</a>
                   <!-- <a href="" class="list-group-item">DECONNEXION</a>-->

         </div>

        
        <form action="logout.php" method="POST">
        <input type="submit" class="btn btn-warning" value="deconnexion">
        </form>
       

            </section>
                 <section class="col-lg-9">
                    <div class="panel panel-primary">
                
                    <div class="panel-heading">
                          <H3 class="panel-title">STATISTIQUE</H3>
                    </div>

                     <div class="panel-body">
                         <div class="col-lg-3">
                            <div class="well">
                                <h2><span class="glyphicon glyphicon-home"></span> <span>10</span></h2>
                                 <h3>Management</h3>
                            </div>
                         </div>
                            <div class="col-lg-3">
                               <div class="well">
                                   <h2><span class="glyphicon glyphicon-stats"></span> <span>400</span></h2>
                                    <h3>Evolution</h3>
                               </div>
                            </div>
                                <div class="col-lg-3">
                                   <div class="well">
                                       <h2><span class="glyphicon glyphicon-user"></span> <span>10000</span></h2>
                                        <h3>Utilisateur</h3>
                                   </div>
                                </div>
                                    <div class="col-lg-3">
                                       <div class="well">
                                           <h2><span class="glyphicon glyphicon-envelope"></span> <span>700</span></h2>
                                            <h3>Messages</h3>
                                       </div>

                                    </div>
                     </div>

                    </div>
                    <?php
                        
    include_once('connectdb.php');
    $request="SELECT* FROM user";
    $allUsers=$db->prepare($request);
    $allUsers->execute();
    $listUsers=$allUsers->fetchAll();
    if(isset($_SESSION['users'])){
       
       ?>
        <?php
        
    if(isset($_SESSION['users']['niveau'])==5){ 
        echo "Bienvenue ". $_SESSION['users']['nom'];

    ?>

    <h3>Liste des utilisateurs</h3>

    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">nom</th>
        <th scope="col">email</th>
        <th scope="col">niveau</th>
        <th scope="col">action</th>
        
        </tr>
    </thead>
    <tbody>
        <?php
    for($i=0; $i<count($listUsers); $i++){
        ?>
        
        <tr>
        <th scope="row"><?php  echo $i+1 ?></th>
        <td><?php echo $listUsers[$i]['nom'] ?></td>
        <td><?php  echo $listUsers[$i]['email'] ?></td>
        <td><?php echo $listUsers[$i]['niveau'] ?></td>
        <td class="d-flex">
        <form method="POST" action="update.php">
            <input type="hidden" name="id_m" value="<?php echo $listUsers[$i]['id_user'];?>">
            <button type="submit" class="b_sub"><i class="fas fa-pencil" style="color: #145ddb;"></i></button> 
            </form>
            <form method="POST" action="delete.php">
            <input type="hidden" name="id_m" value="<?php echo $listUsers[$i]['id_user'];?>">
            <button type="submit" class="b_sub"><i class="fas fa-trash-alt" style="color: #d41111;"></i></button>
            </form>
        </td>
        </tr>
    <?php
    }
    ?> 
    </tbody>
    </table>

    
            </section>
      
                </div>
            </div>
    
            <?php
        
    }else{ 
       // echo "Bienvenue".$_SESSION['users']['nom']."<br>"."dans votre espace personnel";    
       header("Location:../Views/users/connexion.php");
    }
    ?>
     <?php
     }else{
    header("Location:../Views/users/connexion.php");
        
    }
    
    ?>
        <script src="https://kit.fontawesome.com/45b8fbd474.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </body>

