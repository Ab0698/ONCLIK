<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONCLICK CV- HTML Responsive Landing Page</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Lien fontawesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    <link rel="stylesheet" href="assets/css/app-site.css">
    
  <!--<link rel="stylesheet" href="assets/css/style.css">--> 
</head>
<body>

    <!-- Navigation -->
    <div class="navbar">
        <div class="container">
            <img src="assets/image de la grille/logo2-removebg-preview.png" alt="">
            <ul class="nav-links">
                <li class="active"><a href="#hero">Accueil</a></li>
                <li><a href="App/Views/user-dashbord/template/index.html">espace client</a></li>
                <li><a href="#work">a propos</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="App/Views/users/connexion.php" id="signin1">Connexion</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    
    <!-- header du site web -->
    <header>
   
        <div class="container">
           
            <h1 class="heading-xl"><span id="hero-titles"></span></h1>
            <a href="#services" class="scroll-to-down"><i class="las la-arrow-down"></i></a>
        </div>

        <div class="headertext reveal-6">
            <h1>BIENVENUE SUR </h1>
            <h2  data-text=" ON click CV ">ON click CV</h2><!--ce bloc sera le seul qui sera animer-->
           
            
        </div>
       
    </header>
       

  
   
    <!-- //Hero -->

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="section-intro" data-aos="fade-up">
                <h1 class="heading-2">ONCLICK CV </h1>
                <h2>creer votre Curriculum vitae comme suit:</h2>
            </div>
            <div class="grid three-col-grid">
                <div class="service" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="las la-tools"></i></div>
                    <h3 class="heading-3">Choisir ton modele</h3>
                    <p>vous pouvez creer et modifier votre cv et l'obtenir en quelques minutes</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon"><i class="las la-feather"></i></div>
                    <h3 class="heading-3">Modifier le modeles </h3>
                    <p>Apres avoir choisi ton modele de cv editer a votre convenance le modele choisi</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-delay="900">
                    <div class="icon"><i class="las la-tv"></i></div>
                    <h3 class="heading-3">Telecharger ton CV</h3>
                    <p>Le cv finaliser obtener le directement sous votre appareil en un click</p>
                </div>
               
            </div>
        </div>

        <div class="btn-cx">
            <button class="templates" type="btn-cv" id="btn-cv">
                <a href="App/Views/users/caroussel.php">choisir un modèle</a>
            </button>
        </div>
      
    </section>
    <!-- //Services -->

    <!-- la partie de nos missions -->
    <section id="work">
        <div class="container">
            <div class="section-intro" data-aos="fade-up">
                <h1 class="heading-2">Nos missions</h1>
            </div>
            <a href="#" class="grid two-col-grid">
                <div class="project" data-aos="zoom-in" data-aos-delay="300">
                    <img src="./assets/image de la grille/resume-6627200_640.jpg" alt="">
                    <div class="overlay">
                        <div>
                            <h2 class="heading-3">Le choix du CV</h2>
                        <p>Mettre a votre disposition les meilleurs modeles de cv professionnel </p>
                        </div>
                    </div>
                </div>
                <div class="project" data-aos="zoom-in" data-aos-delay="600">
                    <img src="./assets/image de la grille/computer-313840_640.jpg" alt="">
                    <div class="overlay">
                        <div>
                            <h2 class="heading-3">La realisation du CV</h2>
                        <p>Sur ONclick on vous facilite le realisation du meilleur CV pour vous avec un systeme de formulaire rapide et facile </p>
                        </div>
                    </div>
                </div>
                <div class="project" data-aos="zoom-in" data-aos-delay="900">
                    <img src="./assets/image de la grille/bulb-5258341_640.jpg" alt="">
                    <div class="overlay">
                        <div>
                            <h2 class="heading-3">Des conseils et asctuces</h2>
                        <p>Nous mettons a votre disposition les meilleurs astuces pour vous demarquer de vos concurant et obtenir le job de vos reve </p>
                        </div>
                    </div>
                </div>
                <div class="project" data-aos="zoom-in" data-aos-delay="1100">
                    <img src="./assets/image de la grille/office-583839_640.jpg" alt="">
                    <div class="overlay">
                        <div>
                            <h2 class="heading-3">Accessible sur tous type d'ecran</h2>
                        <p>vous pouvez utiliser ONCLICK via tous type d'ecran  </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
   

    <!-- feelback-->
    <section id="blog">
        <div class="container">
            <div class="section-intro" data-aos="fade-up">
                <h1 class="heading-2">Avis des utilisateurs</h1>
            </div>
            <div class="grid three-col-grid">
                <div class="blog-post" data-aos="flip-left" data-aos-delay="300">
                    <img src="./assets/image de la grille/avis/testi2.jpg" alt="">
                    <h3><a href="#">Mr jean cubain</a></h3>
                    <p>Le premier pas vers le succès est franchi lorsque vous refusez d'être captif de l'environnement dans lequel vous vous trouvez d'abord.</p>
                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="600">
                    <img src="./assets/image de la grille/avis/testi3.jpg" alt="">
                    <h3><a href="#">Mme crevoulin amelia</a></h3>
                    <p>Votre cv qui sera creer vous donnera un visage positif qui mettra les gens à l'aise autour de vous. on click reste les meilleurs.</p>
                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <img src="./assets/image de la grille/avis/images.jpg" alt="">
                    <h3><a href="#">Mr joseph hampton</a></h3>
                    <p>ON click permet de créer un CV adapté à chaque corps de métier et c'est rapide et tres efficace.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //Blog -->

    <!-- a propos -->
    <section id="contact">
        <div class="container">
            <div class="grid">
                <div class="contact-info" data-aos="fade-up">
                    <div class="section-intro">
                        <h1 class="heading-2">infos et contact</h1>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Email</h3>
                        <ul>
                            <li>hello@themebau.com</li>
                            <li>johndoe@example.com</li>
                        </ul>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Phone</h3>
                        <ul>
                            <li>+5 500-358-0309</li>
                            <li>+12 500-358-0309</li>
                        </ul>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Location</h3>
                        <ul>
                            <li>C/54 Northwest Freeway, Suite 558, Houston, USA 485</li>
                        </ul>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                    <div class="section-intro">
                        <h1 class="heading-2">vos feelback</h1>
                    </div>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" placeholder="Jon@example.com">
                        </div>
                        <div class="form-group">
                            <textarea name="" rows="5" class="form-input" placeholder="Hi there..."></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn">envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //Contact -->

    <!-- Footer -->
    <footer>
        <div class="footertxt">
          <p>Copyright © 2023 web-eau.net - Tous droits réservés - Mentions légales - C.G. prestations de service<br>
            Joomla! est un Logiciel Libre diffusé sous licence GNU General Public - Le nom et le logo Joomla sont utilisés sous une licence limitée accordée parOpen Source Matters aux<br> 
            États-Unis et dans  d'autres pays. Web-eau.net n'est pas affilié ou approuvé par le projet Joomla ou par Open Source Matters.</p>
        </div>
        <hr style="height:2px;border-width:0;color:gray;background-color: white" id="barrw">
        <div class="graphiccharte">
          <div class="logo">
            <img src="./assets/image de la grille/logo2-removebg-preview.png" alt="">
          </div>
          <div class="icon">
               <img src="./assets/image de la grille/icones/twitter.png" alt="">
               <img src="./assets/image de la grille/icones/instagram.png" alt="">
               <img src="./assets/image de la grille/icones/linkedin.png" alt="">
          </div>
        </div>
    </footer>
    
    <!-- typed js -->
   
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
    <!-- AOS -->
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>
