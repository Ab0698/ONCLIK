<?php
include('header.php');
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php// echo dirname($_SERVER['PHP_SELF']) . '../../../../assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php// echo dirname($_SERVER['PHP_SELF']) . '../../../../assets/css/app-site.css'; ?>">
    <title>Caroussel</title>
</head>

<body>
     < Navigation -->
     <!--<div class="navbar">
        <div class="container">
            <img src="../../assets/image de la grille/logo2-removebg-preview.png" alt="">
            <ul class="nav-links">
                <li class="active"><a href="#hero">Accueil</a></li>
                <li><a href="#services">espace client</a></li>
                <li><a href="#work">a propos</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="../../App/Views/users/connexion.php" id="signin1">Connexion</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>  -->
    <!--
         <div class="banner">
        <div class="navbar">
            <img src="./images/logo.png" alt="" class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Equipment</a></li>
                <li><a href="#">Trails</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>EXPLORE THE UNKNOWN</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet corporis in error?</p>
            <div>
                <button class="signup-btn" type="button"><span class="cover"></span>SIGN UP</button>
                <button class="login-btn" type="button"><span class="cover"></span>LOG IN</button>
            </div>
        </div>
    </div>
    -->
   

    <section class="product"> 
        <h2 class="product-category">Les meilleurs modèles</h2>
        <button class="pre-btn"><img src="../../../images/arrow.png" alt="">></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt="">></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">BTP</span>
                    <img src="../../../assets/image de la grille/images/2d492d74-9145-4abd-994a-fcc96696a475.jpg" class="product-thumb" alt="">
                    <button class="card-btn">
                      <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Gratuit</h2>
                    <p class="product-short-description">Un clic et commencer ...</p>
                   
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">medecine</span>
                    <img src="../../../assets/image de la grille/images/CV-modèle-Circulaire.1666903551329 new23.svg" class="product-thumb" alt="">
                    <button class="card-btn">
                      <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Gratuit</h2>
                    <p class="product-short-description">Un clic et commencer ...</p>
                    
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">Finanaces</span>
                    <img src="../../../assets/image de la grille/images/CV-modèle-Horizontal.1619438008798 new67.svg" class="product-thumb" alt="">
                    <button class="card-btn">
                      <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Payant</h2>
                    <p class="product-short-description">Un clic et ajouter</p>
                   
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">Transport</span>
                    <img src="../../../assets/image de la grille/images/CV-modèle-Moderne.1666903717992 new18.svg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Gratuit</h2>
                    <p class="product-short-description">Un clic et commencer ...</p>
                    
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">Education</span>
                    <img src="../../../assets/image de la grille/images/CV-modèle-Simple.1666904182836 new 254.svg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="generator.php">Utiliser ce modèle</a>
                   </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Gratuit</h2>
                    <p class="product-short-description">Un clic et commencer ...</p>
                    
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">Administration</span>
                    <img src="../../../assets/image de la grille/images/CV-modèle-Élégant.1666902948209 new100.svg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Payant</h2>
                    <p class="product-short-description">Un clic et ajouter</p>
                    
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">informatique</span>
                    <img src="../../../assets/image de la grille/images/CV-sans-expérience_01.svg" class="product-thumb" alt="">
                    <button class="card-btn">
                      <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Payant</h2>
                    <p class="product-short-description">Un clic et ajouter</p>
                   
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">Mines</span>
                    <img src="../../../assets/image de la grille/images/cv-type-cv-ordre-chronologique-456x645.jpg" class="product-thumb" alt="">
                    <button class="card-btn">
                      <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Gratuit</h2>
                    <p class="product-short-description">Un clic et commencer ...</p>
                   
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">commerciales</span>
                    <img src="../../../assets/image de la grille/images/CV_Aide-soignante_01.svg" class="product-thumb" alt="">
                    <button class="card-btn">
                      <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Gratuit</h2>
                    <p class="product-short-description">Un clic et commencer ...</p>
                   
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">Mode</span>
                    <img src="../../../assets/image de la grille/images/d4ee025e-4287-4dba-97bf-dbddb6c3d756.jpeg" class="product-thumb" alt="">
                    <button class="card-btn">
                      <a href="generator.php">Utiliser ce modèle</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Payant</h2>
                    <p class="product-short-description">Un clic et ajouter</p>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <script src="../../../assets/js/scriptcar.js"></script>
<?php
include('footer.php');
?>