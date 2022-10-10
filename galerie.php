<?php
// session_start();
  include('config.php');
  include('views/user_nbr.php');
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

  <style>
    .center {
      text-align: center;
    }

    .pagination {
      margin: 0 auto;
      text-align: center;
      padding: 24px;
    }

    .pagination li {
      display: inline;
      color: #fff;
      text-shadow: 0 1px 1px #eee;
    }

    .pagination li span {
      letter-spacing: 0.1em;
      margin: 0 6px;
    }

    .pagination li a {
      background: #E89F10;
      color: #fff;
      border: 1px solid #E89F10;
      padding: 10px 12px;
      text-decoration: none;
      -moz-border-radius: 6px;
      border-radius: 3px;
      text-shadow: 0 1px 1px #eee;
      margin: 0 3px;
    }

    .pagination li a:hover {
      background: white;
      color: #303438;
    }

    .pagination li.active a {
      background: white;
      color: #303438;
      border: none;
      font-weight: bolder;
    }


    .pagination li .titik {

      color: #303438;

      font-weight: bolder;
    }


    .pagination li.symbol a {
      font-size: 16px;
      font-weight: bolder;
      padding: 5px 12px 8px 12px;
    }


    .pagination li.disabled {
      display: none;
      visibility: hidden;
    }

    .middle {
  transition: .5s ease;
  opacity: 0;
  
}

div.img1{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.img1:hover .image {
  opacity: 0.3;
}

.img1:hover .middle {
  opacity: 1;
}
  </style>
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
          <li class="nav-item"><a href="index.php?c" class="nav-link pl-0">Accueil</a></li>
          <li class="nav-item"><a href="index.php?c=apropos" class="nav-link">A propos</a></li>
          <li class="nav-item"><a href="index.php?c=formations" class="nav-link">Formations</a></li>
          <li class="nav-item"><a href="index.php?c=tarif" class="nav-link">Grille tarifaire</a></li>
          <li class="nav-item"><a href="index.php?c=inscription" class="nav-link">Inscription</a></li>
          <!-- <li class="nav-item"><a href="index.php?c=reglement" class="nav-link">Règlement interieur</a></li> -->
          <li class="nav-item"><a href="machines.php" class="nav-link">Boutique</a></li>
          <li class="nav-item"><a href="videos.php" class="nav-link">Vidéos</a></li>
          <li class="nav-item active"><a href="galerie.php" class="nav-link">Galerie</a></li>
          <li class="nav-item"><a href="index.php?c=contact" class="nav-link">Contact</a></li>

          <?php if (isset($_SESSION['id_user'])) { ?>
						<li class="nav-item"><a href="forum.php" class="nav-link">Commentaires</a></li>
						<li class="nav-item "><a href="index.php?c=dcnx" class="nav-link">Déconnexion</a></li>
					<?php } else { ?>
						<li class="nav-item"><a href="index.php?c=forum" class="nav-link">Commentaires</a></li>
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
          <h1 class="mb-2 bread">Galerie</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php?c">Acceuil <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Galerie <i
                class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container" style="margin-top: -80px;">
      <div class="row">
        <?php
              for($i=0; $i < count($results->data); $i++) {
            ?>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry img1">
            <a class="block-20 d-flex align-items-end"
              style="background-image: url('images/<?php echo $results->data[$i]['photo'] ?>');">
              <div class="meta-date text-center p-2 middle">
                  <span class="day"><?php $date=date_create($results->data[$i]['date_ajout']); $date_fr=date_format($date,"d-m-Y"); echo $date_fr ?></span>
                  <!-- <span class="mos">June</span>
                  <span class="yr">2019</span> -->
                </div>
            </a>
            <!-- <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div> -->
          </div>
        </div>
        <?php
              }
            ?>

      </div>
    </div>

    <div class="row">
      <?php
        echo $paginator->createLinks($links);
      ?>
    </div>
  </section>



  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/DSC_0018.jpg)"
    data-stellar-background-ratio="0.5">
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



  <?php include("views/footer.php") ?>



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
  <script src="js/contact.js"></script>

</body>

</html>