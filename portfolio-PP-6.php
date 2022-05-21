<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Créteur Nicolas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php#portfolio" class="nav-link scrollto active"><i class="bx bx-arrow-back"></i> <span>Retour</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Résolution lié à un problème de sécurité de l'application Heroku</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li> Heroku </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8 doss">

            <div class="col-lg-12 heroku">
              <img src="assets/img/portfolio/heroku.jpg" alt="logo heroku">
            </div>

            <div class="col-lg-12">  
              <p>
                Le 19 Avril 2022 alors que je travaillait sur mon Portfolio un probleme s'est produit, je n'arrivais plus à mettre à jour ma version en ligne.
                Mon premier reflexe fût de vider le 
                <a href="https://www.techbuyer.com/fr/blog/comprendre-la-memoire-cache#:~:text=La%20m%C3%A9moire%20cache%20stocke%20temporairement,plus%20rapide%20%C3%A0%20ces%20donn%C3%A9es." 
                target="blank">cache</a> et d'effectuer une actualisation forcée, ensuite j'ai regarder mon code, est ce qu'il y avait un bug, une erreur d'execution, est ce que le push de 
                mon code sur git hub s'est bien passé, par la suite j'ai pris une mauvaise décision, je suis partis du principe que l'erreur ne venais pas de moi mais de Heroku et que peut 
                etre il y avait un nombre de MAJ maximal autorisé, j'ai donc supprimer mon compte heroku, ré-ouvert un nouveau compte afin d'heberger de nouveau mon Portfolio, ceci n'a pas 
                fonctionner et de plus mon Portfolio n'était plus en ligne et apparemment ça n'était plus possible de le faire pour une raison qui m'échappais encore.</br>
                Donc à deux semaines de rendre le portfolio la panique s'empare légèrement de ma personne. Par la suite je me suis aperçus que quand je tentais de mettre à jour mon site 
                heroku me renvoyais l'erreur "Items could not be retrieved, Internal server error", en cherchant j'ai trouver la réponse sur <a href="https://stackoverflow.com/" 
                target="blank">Stackoverflow</a>, l'article sur lequel je suis tombé 
                (<a href="https://stackoverflow.com/questions/71892543/heroku-and-github-items-could-not-be-retrieved-internal-server-error" target="blank">"Heroku et GitHub"</a>) 
                ma appris que heroku venais de subir une attaque informatique importante, en somme les hackers on reussit à s'introduire dans la BDD heroku et voler les jetons d'authentification
                et dans l'urgence heroku a supprimer tout les jetons et n'en fournirais pas d'autres en attendant de résoudre le problème, ce qui empechait d'actualiser les sites qui y 
                étaient hébergés.</br>
                Cependant, heroku a fournis une solution temporaire, installer leur client lourd, 
                (<a href="https://devcenter.heroku.com/articles/getting-started-with-php#set-up" target="blank">Heroku CLI</a>).
              </p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

              <a href="assets/img/portfolio/cli.jpg" target="blank" class="col-lg-6 col-md-6 portfolio-item" title="Client heroku">
                <img src="assets/img/portfolio/cli.jpg" class="img-fluid" alt="CLI heroku">
              </a>

            </div>

            <div class="col-lg-12">
              <p>
                Quelques jours après j'ai reçus un email de Heroku et de GitHub m'informant de la faille de sécurité et que je devait changer au plus vite mes identifiants de connections.
              </p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

              <a href="assets/img/portfolio/saleforce.jpg" target="blank" class="col-lg-6 col-md-6 portfolio-item" title="Email">
                <img src="assets/img/portfolio/saleforce.jpg" class="img-fluid" alt="Email Heroku">
              </a>

              <a href="assets/img/portfolio/GSecurity.jpg" target="blank" class="col-lg-6 col-md-6 portfolio-item" title="Email">
                <img src="assets/img/portfolio/GSecurity.jpg" class="img-fluid" alt="Email GitHub">
              </a>

            </div>

            <div class="col-lg-12">
              <p>
                Après un temps nécéssaire à l'instalation, la vérification que les pré-requis soient présent et à la comprehention de l'utilisation du client lourd il ne me restait plus qu'à 
                actualiser mon portfolio,sans oublier de prevenirs les personnes de ma classes qui heberge aussi sur heroku du probleme de sécurité et de la solution apportée.
              </p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

              <a href="assets/img/portfolio/push_heroku.jpg" target="blank" class="col-lg-6 col-md-6 portfolio-item" title="push invite de commande">
                <img src="assets/img/portfolio/push_heroku.jpg" class="img-fluid" alt="invite de commande">
              </a>

              <a href="assets/img/portfolio/message.jpg" target="blank" class="col-lg-6 col-md-6 portfolio-item" title="whatsapp">
                <img src="assets/img/portfolio/message.jpg" class="img-fluid" alt="message whatsapp">
              </a>

            </div>

          </div>

          <div class="col-lg-4">

            <div class="portfolio-info">
              <h3>Details du Dossier</h3>
              <ul>
                <li><strong>PAAS</strong>: Heroku </li>
                <li><strong>Statut</strong>: Résolut </li>
                <li><strong>But</strong>: Résoudre un probleme lié à Heroku </li>
                <li><strong>Date du Projet</strong>: 19/04/2022 </li>
              </ul>
            </div>

            <div class="portfolio-description">
              <h2>A propos</h2>
              <p>
                <a href="https://en.wikipedia.org/wiki/Heroku" target="blank">Heroku</a> est un 
                <a href="https://fr.wikipedia.org/wiki/Platform_as_a_service" target="blank">PaaS</a> qui sert d'hebergeur-web, 
                sa grande difference par rapport à ses concurents (par exemple Wix ou WordPress) est qu'il ne propose pas 
                d'outils de création de site web mais qu'il permet l'hebergement de code supporté dans plusieurs languages.
                Récemment Heroku asubit une attaque informatique ce qui a causé quelques problèmes.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>