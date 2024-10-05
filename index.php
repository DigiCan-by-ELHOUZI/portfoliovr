<?php
  require 'config.php';

  if(isset($_POST["submit"])){
  
   $Nm=$_POST['name'];
   $Mail=$_POST['email'];
   $Sbjt=$_POST['subject'];
   $Msg=$_POST['message'];
   
   
   
   $req="INSERT INTO contacte(name,email,subject,message) values (' $Nm','$Mail','$Sbjt','$Msg')";
   $res=mysqli_query($conn,$req);
   echo
   "
   <script>alert('Votre demande sera prise en compte et nous vous répondrons dans les meilleurs délais. ');</script>
   
   ";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DigiCan</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:abdelmounaimelhouzi@gmail.com">abdelmounaimelhouzi@gmail.com</a>
        <i class="icofont-phone"></i> +33769092324
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="https://www.linkedin.com/in/abdelmounaim-el-houzi-52b549227" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span>DigiCan</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Accueil</a></li>
          <li class="drop-down"><a href="">Études</a>
            <ul>
              <li><a href="bts.html">BTS SIO</a></li>
              <li><a href="#">Bachelor Bac+3</a></li>
            </ul>
          </li>
          
          <li class="drop-down"><a href="">AUTRES</a>
            <ul>
              <li class="drop-down"><a href="#">PROJETS & STAGES</a>
                <ul>
                  <li><a href="prjt_stg1.html">BTS SIO 1ére année</a></li>
                  <li><a href="prjt_stag2.html">BTS SIO 2éme année</a></li>
                </ul>
              </li>
              <li><a href="veilletech.html">Veille Technologique</a></li>
              
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

          
          <div class="carousel-item active" style="background-image: url('assets/img/photo-Accueil.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Bonjour,</h2>
                <h2 class="animated fadeInDown">Je Suis <span> EL HOUZI Abdelmounaim</span> </h2>
                <p class="animated fadeInUp"> Administrateur systèmes, réseaux et bases de données</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">En savoir plus</a>
              </div>
            </div>
          </div>
      
   
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets/img/img1.jpg" class="img-fluid" alt=""> 
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>A PROPOS DE MOI</h2>
              <p>je m'appelle El Houzi Abdelmounaim.
                 J'ai 21 ans, je suis actuellement étudiant
                  en 3ème année Bachelor Administration
                   Systèmes, Réseaux et Bases de Données 
                  à l'école d'ingénierie 
                   informatique EPSI Montpellier </p>
              <p> Je suis motivé par l'apprentissage continu 
                et j'aime collaborer avec d'autres passionnés 
                pour développer des solutions créatives et 
                efficaces.</p>
            </div>

            

           

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <section id="Competance" class="s">
      <div class="container">
        <div class="section-title">
          <h2>Compétences</h2>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="mh-skills-inner">
              <div class="mh-professional-skill">
                <h3> Systèmes d'exploitation :</h3>
                 <div class="each-skills">
                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">Linux</div>
                        <div class="percentage-num">40%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 40%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">Windows</div>
                        <div class="percentage-num">80%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 80%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">Mac OS </div>
                        <div class="percentage-num">20%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 20%;"></div>
                      </div>

                    </div>
                  </div>
                  <br>
                 </div>
                 
                 <h3> Base de données :</h3>
                 <div class="each-skills">
                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">MySQL, MariaDB, SQLserver</div>
                        <div class="percentage-num">65%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 65%;"></div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
            </div>
          </div>
         
          <div class="col-sm-12 col-md-6">
            <div class="mh-skills-inner">
              <div class="mh-professional-skill">
                <h3> Programmation :</h3>
                 <div class="each-skills">
                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">HTML</div>
                        <div class="percentage-num">90%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 90%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">CSS</div>
                        <div class="percentage-num">80%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 80%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">Javascript</div>
                        <div class="percentage-num">70%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 70%;"></div>
                      </div>

                    </div>
                  </div>

                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">PHP </div>
                        <div class="percentage-num">60%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 60%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">C#</div>
                        <div class="percentage-num">40%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 40%;"></div>
                      </div>

                    </div>
                  </div>

                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">Java</div>
                        <div class="percentage-num">40%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 40%;"></div>
                      </div>

                    </div>
                  </div>
                  <div class="candidatos">
                    <div class="parcial">

                      <div class="info">
                        <div class="name">Python</div>
                        <div class="percentage-num">20%</div>
                      </div>
                      <div class="progressBar">
                        <div class="percentagem" style="width: 20%;"></div>
                      </div>

                    </div>
                  </div>
                 </div>
                 
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- ======= Services Section ======= -->
    <section id="resume" class="resume">
     
      <div class="container">

        

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">FORMATIONS</h3>

            <div class="resume-item">
              <h4>Bachelor Bac+3</h4>
              <h5>2024 - 2025</h5>
              <p><em>3éme année <strong>Bachelor</strong> Administrateur systèmes, réseaux et bases de données <strong>EPSI Montpellier - L’école d’ingénierie informatique</strong> </em></p>
            </div>
            <div class="resume-item">
              <h4>BTS SIO</h4>
              <h5>2023 - 2024</h5>
              <p><em>2 eme année <strong>BTS SIO</strong> services informatiques aux organisations <strong>Lycée CCI GARD.</strong> </em></p>
            </div>

            <!-- <div class="resume-item">
              <h4>BTS SIO</h4>
              <h5>2022 - 2023</h5>
              <p><em>2 eme année <strong>BTS SIO</strong> services informatiques aux organisations <strong>Lycée CCI GARD.</strong> </em></p>
            </div>

            <div class="resume-item">
              <h4>BTS SIO</h4>
              <h5>2021 - 2022</h5>
              <p><em>1 er année <strong>BTS SIO</strong> services informatiques aux organisations <strong>Lycée CCI GARD.</strong> </em></p>
            </div> -->

            <!-- <div class="resume-item">
              <h4>Licence physique chimie </h4>
              <h5>2020 - 2021</h5>
              <p><em>1er année Licence physique chimie</em></p>
              
            </div> -->


            <div class="resume-item">
              <h4>Baccalauréat </h4>
              <h5>2019 - 2020</h5>
              <p><em>Baccalauréat Sciences expérimentales </em></p>
              
            </div>
          </div>

          <div class="col-lg-6">
            <h3 class="resume-title">EXPERIENCES PROFESSIONNELLES </h3>

            <div class="resume-item">
              <h4>freelance developer web</h4>
              <h5>04/2023 - 01/2024 </h5>
              <p><em>freelance developer web</em></p>
            </div>

            <div class="resume-item">
              <h4>Conseillère de vente polyvalent</h4>
              <h5>15/06/2023 - 28/06/2024 </h5>
              <p><em>Employé Conseillère de vente polyvalent</em></p>
            </div>

            <div class="resume-item">
              <h4>Stage informatique</h4>
              <h5>2023</h5>
              <p><em>Stage informatique (janvier – février) EFSA</em></p>
            </div>

            <div class="resume-item">
              <h4>Stage informatique</h4>
              <h5>2022</h5>
              <p><em>Stage informatique (Juin – juillet)  ecole de technologie supérieure </em></p>
            </div>

            <div class="resume-item">
              <h4>Employé polyvalent</h4>
              <h5>2021</h5>
              <p><em> Employé polyvalent—Auchan (6mois) </em></p>
            </div>

          </div>
          <div class="section-title">
          <br>
          <h2>CURRICULUM VITAE</h2>
          </div>
          
        </div>
       <a class="buta" href="assets/fichier/cvEPSI.pdf" > Consulter cv</a>
          
          <a class="buta" href="assets/fichier/cvEPSI.pdf">Télécharger cv</a>
        
      </div>
    
        
  </section><!-- End Services Section -->
   

  

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>address</h3>
              <p> Montpellier</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>E-mail:</h3>
              <p>Abdelmounaimelhouzi@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Numéro téléphone:</h3>
              <p>+33 769092324</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="config.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>DigiCan</h3>
            <p>
              Montpellier<br>
           
              <strong>Téléphone:</strong> +33769092324<br>
              <strong>E-mail:</strong> abdelmounaimelhouzi@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://www.linkedin.com/in/abdelmounaim-el-houzi-52b549227" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Plan du site</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bachelor Bac+3</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="bts.html">BTS SIO</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="veilletech.html">Veille Technologique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>BTS SIO</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="prjt_stg1.html">BTS SIO 1ére année</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="prjt_stag2.html">BTS SIO 2éme année</a></li>
             
            </ul>
          </div>

       

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DigiCan</span></strong>
      </div>
      <div class="credits">
        Site réalisé par<a href="index.html"> EL HOUZI Abdelmlounaim</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>