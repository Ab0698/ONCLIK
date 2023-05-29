
            <?php
            session_start(); 
            $_SESSION['users']=$_POST;
            //pour envoyer les données
            print_r($_POST);
            include_once('connectdb.php');
            $request="SELECT*from user";
            $allUsers=$db->prepare($request);
            $allUsers->execute();
            $listUsers=$allUsers->fetchAll();
            //print_r($listUsers); 

            $niveau=$_POST['niveau'];
            $name=$_POST['nom'];
            $email=$_POST['email'];
            $pwd=$_POST['pwd'];
            $confirm_pwd=$_POST['confirm_pwd'];
            $transfer="INSERT INTO `user`(`nom`,`email`,`pwd`,`niveau`) VALUES(:nom,:email,:pwd,:niveau)";
            $result=$db->prepare($transfer);
            $res=$result->execute(array(":nom"=>$name,":email"=>$email,":pwd"=>$pwd,":niveau"=>$niveau));
            if($res){
                echo "Données insérées";

            }else{
                echo "erreur d'insertion";
            }

           
            ?>
           