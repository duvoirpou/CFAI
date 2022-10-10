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

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid bg-dark d-flex align-items-center px-4">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
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
					<li class="nav-item active"><a href="?c=tarif" class="nav-link">Grille tarifaire</a></li>
					<li class="nav-item"><a href="?c=inscription" class="nav-link">Inscription</a></li>
					<!-- <li class="nav-item"><a href="?c=reglement" class="nav-link">Règlement interieur</a></li> -->
					<li class="nav-item"><a href="machines.php" class="nav-link">Boutique</a></li>
					<li class="nav-item"><a href="videos.php" class="nav-link">Vidéos</a></li>
					<li class="nav-item"><a href="galerie.php" class="nav-link">Galerie</a></li>
					<li class="nav-item"><a href="?c=contact" class="nav-link">Contact</a></li>

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
					<h1 class="mb-2 bread">Tarifs</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="?c">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Tarifs <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container-fluid px-4" style="margin-top: -80px;">
			<div class="panel panel-default">
				<div class="panel-body table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th colspan="4">
									<h2 class="text-center">FORMATIONS – TARIF - DURÉE</h2>
								</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td>
									<h3>FORMATIONS</h3>
								</td>
								<td>
									<h3>INSCRIPTION</h3>
								</td>
								<td>
									<h3>FRAIS MENSUEL</h3>
								</td>
								<td>
									<h3>DURÉE</h3>
								</td>
							</tr>
							<tr>
								<td>Bureautique 1(Word, Excel, Publisher) Basique</td>
								<td>2 500 F cfa</td>
								<td>15 000 F cfa</td>
								<td>3 Mois</td>
							</tr>
							<tr>
								<td>Langue : Anglais - Chinois</td>
								<td>2 500 F cfa</td>
								<td>15 000 F cfa</td>
								<td>3 Mois</td>
							</tr>
							<tr>
								<td>Secrétariat-Bureautique(Word, Excel, Publisher) Avancé</td>
								<td>2 500 F cfa</td>
								<td>15 000 F cfa</td>
								<td>3 Mois</td>
							</tr>
							<tr>
								<td>MS Project</td>
								<td>5 000 F cfa</td>
								<td>15 000 F cfa</td>
								<td>3 Mois</td>
							</tr>
							<tr>
								<td>Développement Web Java script, Php, Html, Css</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>6 Mois</td>
							</tr>
							<tr>
								<td>Programmation <br> <span style="font-size: 12px">(Java, Visual Basique)</span> </td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>6 Mois</td>
							</tr>
							<tr>
								<td>Infographie <br> <span style="font-size: 12px">(Photoshop, illustrator, Indesign)</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>6 Mois</td>
							</tr>
							<tr>
								<td>Architecture <br> <span style="font-size: 12px">(Autocad, Archicad, Revit)</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>6 Mois</td>
							</tr>
							<tr>
								<td>Maintenance-Réseaux <br> <span style="font-size: 12px">(PC de Bureau, Ordinateur portable, imprimante, Photocopieuse, Caméra)</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>4-7 Mois</td>
							</tr>
							<tr>
								<td>Comptabilité Générale</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>3 Mois</td>
							</tr>
							<tr>
								<td>Sage compta : Paie</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>3 Mois</td>
							</tr>
							<tr>
								<td>Bases de Données : Accès</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>2 Mois</td>
							</tr>
							<tr>
								<td>Electricité bâtiment</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>3 Mois</td>
							</tr>
							<tr>
								<td>Alarme & Caméra de surveillance</td>
								<td>5 000 F cfa</td>
								<td>25 000 F cfa</td>
								<td>3 Mois</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>

		</div>
	</section>


	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/DSC_0166.jpg)" data-stellar-background-ratio="0.5">
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
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


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

</body>

</html>