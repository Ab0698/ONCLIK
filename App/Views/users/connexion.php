<!--<link rel="stylesheet" href="../../../assets/css/style2.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

  <?php
  include('header.php');
  ?>-->
 
<!--<!DOCTYPE html>
<html>
<head>
	<title>How to Design Login & Registration Form Transition</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../assets/css/style2.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>-->
<!--<div class="cont">
  <form action="../../Controllers/user.php" method="post">
       <div class="form sign-in">
          <h2>Connexion</h2>
          <label>
            <span>email</span>
            <input type="email" name="adresse_email">
          </label>
            <label>
              <span>mot de passe</span>
              <input type="password" name="password">
            </label>
            <button class="submit" type="button">S' inscrire</button>
            <p class="forgot-pass">Mot de passe oublie ?</p>

            <div class="social-media">
              <ul>
                <li><img src="../../../assets/image de la grille/images/facebook.png"></li>
                <li><img src="../../../assets/image de la grille/images/twitter.png"></li>
                <li><img src="../../../assets/image de la grille/images/linkedin.png"></li>
                <li><img src="../../../assets/image de la grille/images/instagram.png"></li>
              </ul>
            </div>
          </div>
</form>

      <div class="sub-cont">
            <div class="img">
              <div class="img-text m-up">
                <h2>Nouveau ici?</h2>
                <p>Inscrivez-vous et découvrez une grande quantité de nouvelles opportunités!</p>
              </div>

              <div class="img-text m-in">
                <h2>One of us?</h2>
                <p>Si vous avez déjà un compte, connectez-vous. Vous nous avez manqué !</p>
              </div>

              <div class="img-btn">
                <span class="m-up">S'inscrire</span>
                <span class="m-in">S'identifier</span>
              </div>
            </div>
<form action="../../Controllers/user.php" method="post">
          <div class="form sign-up">
            <h2>Sign Up</h2>
            <label>
              <span>Name</span>
              <input type="text" id="nom" name="nom">
              <small id="error_name">error</small>
            </label>
            <label>
              <span>Email</span>
              <input type="email" id="email" name="email">
              <small id="error_email">error</small>

            </label>
            <label>
              <span>Password</span>
              <input type="password" id="pwd" name="pwd">
              <small id="error_pwd">error</small>

            </label>
            <label>
              <span>Confirm Password</span>
              <input type="password" id="confirm_pwd" name="confirm_pwd">
              <small id="error_confirm_pwd">error</small>

            </label>
           <button type="submit" class="submit">Sign Up Now</button>
          </div>
    </form>
      </div>
  </div>
 

<script type="text/javascript" src="../../../assets/js/script.js"></script>

<script src="../../../assets/js/user.js"></script>-->
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Page de connexion et d'inscription</title>
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style2.css">
</head>
<body>
    <div class="box">

        <img src="../../../assets/image de la grille/logo2-removebg-preview.png">
        <div class="page">
            <div class="header">
                <a id="login" class="active" href="#login">connexion</a>
                <a id="signup" href="#signup">s'inscrire</a>
            </div>
            <div id="errorMsg"></div>
            <div class="content">
                <form class="login" name="loginForm"  onsubmit="return  validateLoginForm()" method="POST" action="../../Controllers/login.php">
                    <input type="text" name="username" id="logName" placeholder="Nom d'utilisateur">
                    <input type="password" name="password" id="logPassword" placeholder="Mot de passe">
                    <div id="check">
                        <input type="checkbox" id="remember">
                        <label for="remember">Souviens-toi de moi</label>
                    </div>
                    <br><br>
                    <input type="submit" value="Connexion">
                    <a href="#">Mot de passe oublié?</a>
                </form>
                <form class="signup" name="signupForm" onsubmit="return validateSignupForm()" method="POST" action="../../Controllers/user.php">
                    <input type="email" name="email" id="signEmail" placeholder="Email">
                    <input type="text" name="nom" id="signName" placeholder="Nom d'utilisateur">
                    <input type="password" name="pwd" id="signPassword" placeholder="Mot de passe">
                    <input type="password" name="confirm_pwd" id="signPassword2" placeholder="confirmation mot de passe"><br>
                    <input type="hidden" value="1" name="niveau">
                    <input type="submit" value="S'inscrire">
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../assets/js/script.js"></script>
        
</body>