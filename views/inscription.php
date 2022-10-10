<?php 
include('user_nbr.php');
nbr_visites();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>CFAI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid bg-dark d-flex align-items-center px-4">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <!-- <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form> -->
      <div class="collapse navbar-collapse" id="ftco-nav">
        <a class="navbar-brand" href="#"><img src="images/PB01.png" width="100" height="50"></a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item "><a href="?c" class="nav-link pl-0">Accueil</a></li>
          <li class="nav-item"><a href="?c=apropos" class="nav-link">A propos</a></li>
          <li class="nav-item"><a href="?c=formations" class="nav-link">Formations</a></li>
          <li class="nav-item"><a href="?c=tarif" class="nav-link">Grille tarifaire</a></li>
          <li class="nav-item active"><a href="?c=inscription" class="nav-link">Inscription</a></li>
          <!-- <li class="nav-item"><a href="?c=reglement" class="nav-link">Règlement interieur</a></li> -->
          <li class="nav-item"><a href="machines.php" class="nav-link">Boutique</a></li>
          <li class="nav-item"><a href="videos.php" class="nav-link">Vidéos</a></li>
          <li class="nav-item"><a href="galerie.php" class="nav-link">Galerie</a></li>
          <li class="nav-item "><a href="?c=contact" class="nav-link">Contact</a></li>

          <?php if (isset($_SESSION['id_user'])) { ?>
						<li class="nav-item"><a href="forum.php" class="nav-link">Commentaires</a></li>
						<li class="nav-item "><a href="index.php?c=dcnx" class="nav-link">Déconnexion</a></li>
					<?php } else { ?>
						<li class="nav-item"><a href="?c=forum" class="nav-link">Commentaires</a></li>
					<?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC_0133_new.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Inscrivez-vous</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="?c">Accueil <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Inscription <i
                class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section" style="margin-top: -80px;">
    <div class="container">
      <form action="" method="post" id="formulaire">
        <fieldset>
          <legend>ETAT CIVIL</legend>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nom">Nom</label>
                <input id="nom" class="form-control" type="text" name="">
              </div>

              <div class="form-group">
                <label for="date_naiss">Date de naissance</label>
                <input id="date_naiss" class="form-control" type="date" name="date_naiss">
              </div>

              <div class="form-group">
                <label for="sexe">Sexe</label>
                <select id="sexe" class="form-control" name="sexe">
                  <option></option>
                  <option>M</option>
                  <option>F</option>
                </select>
              </div>

              <div class="form-group">
                <label for="cni">N° Carte nationnale d'identité</label>
                <input id="cni" class="form-control" type="text" name="cni">
              </div>

              <div class="form-group">
                <label for="tel">Tel</label>
                <input id="tel" class="form-control" type="text" name="tel">
              </div>


            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="prenom">Prénom</label>
                <input id="prenom" class="form-control" type="text" name="prenom">
              </div>

              <div class="form-group">
                <label for="lieu_naiss">Lieu de naissance</label>
                <input id="lieu_naiss" class="form-control" type="text" name="lieu_naiss">
              </div>

              <div class="form-group">
                <label for="adresse">Adresse</label>
                <input id="adresse" class="form-control" type="text" name="adresse">
              </div>

              <div class="form-group">
                <label for="email">Adresse email</label>
                <input id="email" class="form-control" type="email" name="email">
              </div>

              <div class="form-group" hidden>
                <label for="date_insc">date_insc</label>
                <input id="date_insc" class="form-control" type="text" name="date_insc">
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>PARENTS OU TUTEURS </legend>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nom_pere">Nom (s) du père </label>
                <input id="nom_pere" class="form-control" type="text" name="nom_pere">
              </div>
              <div class="form-group">
                <label for="adresse_pere">Adresse du père </label>
                <input id="adresse_pere" class="form-control" type="text" name="adresse_pere">
              </div>
              <div class="form-group">
                <label for="tel_pere">Téléphone du père </label>
                <input id="tel_pere" class="form-control" type="text" name="tel_pere">
              </div>
              <div class="form-group">
                <label for="prenom_mere">Prénom (s) de la mère </label>
                <input id="prenom_mere" class="form-control" type="text" name="prenom_mere">
              </div>
              <div class="form-group">
                <label for="ville_mere">Ville de la mère </label>
                <input id="ville_mere" class="form-control" type="text" name="ville_mere">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="prenom_pere">Prénom (s) du père </label>
                <input id="prenom_pere" class="form-control" type="text" name="prenom_pere">
              </div>
              <div class="form-group">
                <label for="ville_pere">Ville du père </label>
                <input id="ville_pere" class="form-control" type="text" name="ville_pere">
              </div>
              <div class="form-group">
                <label for="nom_mere">Nom (s) de la mère </label>
                <input id="nom_mere" class="form-control" type="text" name="nom_mere">
              </div>
              <div class="form-group">
                <label for="adresse_mere">Adresse de la mère </label>
                <input id="adresse_mere" class="form-control" type="text" name="adresse_mere">
              </div>
              <div class="form-group">
                <label for="tel_mere">Téléphone de la mère </label>
                <input id="tel_mere" class="form-control" type="text" name="tel_mere">
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>FORMATION CHOISIE </legend>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="formation">Formation </label>
                <select id="formation" class="form-control" name="formation">
                  <option></option>
                  <option>Bureautique</option>
                  <option>Architecture</option>
                  <option>MS Projet</option>
                  <option>Maintenance des ordinateurs</option>
                  <option>Comptabilité</option>
                  <option>Electricité Bâtiment</option>
                  <option>Programmation</option>
                  <option>Sage paie</option>
                  <option>Access</option>
                  <option>Développement Web</option>
                  <option>Réseaux et sécurité</option>
                  <option>Anglais-Chinois</option>
                  <option>Infographie</option>
                  <option>Logistique</option>
              </div>
            </div>
          </div>
        </fieldset>
        
        <div class="form-group">
            <input  type="hidden" name="etat" id="etat" value="en cours" class="form-control">
        </div>
        <div class="form-group">
            <input  type="hidden" name="action" id="action" class="form-control">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="submit" value="Validez" class="btn btn-primary py-3 px-5" style="margin-top: 50px;">
            </div>
          </div>
        </div>
      </form>
    </div>

  </section>

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/DSC_0168.jpg)" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<!-- <div class="img img-video d-flex align-items-center" style="background-image: url(images/about-2.jpg);">
    					<div class="video justify-content-center">
								<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div> -->
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <!-- <h2 class="mb-4">Des Formateurs de haut niveau</h2>
            <p>Le Centre de Formation Accélérée en Informatique travaille avec des formateurs qualifiés de très haut niveau qui sont à l’écoute de chaque apprenant quel que soit son niveau scolaire.</p>
            <p>Les formateurs s’adaptent aux doléances et la capacité de compréhension de chaque apprenant pour le faire progresser pas à pas. Des cours de rattrapage gratuit sont dispensés chaque semaine pour ne laisser personne au bord de la route.</p> -->
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <!-- <strong class="number" data-number="18">0</strong>
		                <span>Formateurs</span> -->
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
                  <strong class="number" data-number="<?php echo $users; ?>">0</strong>
		                <span>Visites</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <!-- <strong class="number" data-number="30">0</strong>
		                <span>Formations</span> -->
		              </div>
		            </div>
		          </div>
		          <!-- <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div> -->
	          </div>
          </div>
        </div>
    	</div>
    </section>

  <?php include("footer.php") ?>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="js/inscription.js"></script>

</body>

</html>