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
	<meta name="author" content="Précieux Assako">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
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
            <input type="text" class="form-control pl-3" placeholder="Recherchez une formation">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form> -->
			<div class="collapse navbar-collapse" id="ftco-nav">
				<a class="navbar-brand" href="#"><img src="images/PB01.png" width="100" height="50"></a>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a href="?c" class="nav-link pl-0">Accueil</a></li>
					<li class="nav-item"><a href="?c=apropos" class="nav-link">A propos</a></li>
					<li class="nav-item"><a href="?c=formations" class="nav-link">Formations</a></li>
					<li class="nav-item"><a href="?c=tarif" class="nav-link">Grille tarifaire</a></li>
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

	<!-- <div id="carouselId" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselId" data-slide-to="0" class="active"></li>
			<li data-target="#carouselId" data-slide-to="1"></li>
			<li data-target="#carouselId" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img data-src="images/N/IMG_2786.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img data-src="images/N/IMG_2786.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img data-src="images/N/IMG_2786.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> -->

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/DSC_0133_new.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<!-- <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Education Needs Complete Solution</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div> -->
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/DSC_0128_new.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<!-- <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">University, College School Education</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div> -->
			</div>
		</div>
	</section>

	<section class="ftco-services ftco-no-pb">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<!-- <span class="flaticon-teacher"></span> -->
						</div>
						<div class="media-body p-2 mt-3">
							<!-- <h3 class="heading">Professeurs certifiés</h3> -->
							<!-- <p>Mettez un texte pour commenter sur les Professeurs certifiés</p> -->
							<?php $i = 0;
							while ($vid = $affV->fetch()) {
								$i++; ?>
								<video controls preload="metadata" style="width: 100%;">
									<source src="videos/<?php echo $vid['video'] ?>">
									Bienvenue à CFAI
								</video>
								<br>
								<br>
								<!-- <h2><?php echo $vid['libelle'] ?></h2> -->
							<?php } ?>

							<!-- <video controls preload="metadata" style="width: 100%;">
								<source src="videos/CFA_i_vidéo.mp4">
								Bienvenue à CFAI
							</video>
							
							<video controls preload="metadata" style="width: 100%;">
								<source src="videos/La connaissance est infinie.mp4">
								Bienvenue à CFAI
							</video> -->

							<h3 class="heading" style="margin-top: 20px;">Visites : <?php echo $users; ?></h3>
							<a href="http://www.facebook.com/cfa.ibrazza" target="_blank" style="text-decoration: none;">
								<!-- <i class="fa fa-facebook-square fa-3x" style="margin-top: ; color: white; /*#3b5998;*/"></i> -->
								<img src="images/icone/Facebook.png" alt="" srcset="" style="border-radius: 100%; width: 50px">
							</a>
							<a href="https://twitter.com/PatrickMampouya" target="_blank" style="text-decoration: none;">
								<!-- <i class="fa fa-twitter-square fa-3x" style="margin-left: 30px;  color: white; /*#00acee;*/"></i> -->
								<img src="images/icone/Twitter1.png" alt="" srcset="" style="border-radius: 100%; width: 50px">
							</a>

							<a href="http://www.mampouyapatrickeric@gmail.com" target="_blank" style="text-decoration: none;">
								<!-- <i class="fa fa-twitter-square fa-3x" style="margin-left: 30px;  color: white; /*#00acee;*/"></i> -->
								<img src="images/icone/gm.png" alt="" srcset="" style="border-radius: 100%; width: 50px">
							</a>
							<a href="https://www.rfi.fr" target="_blank" style="text-decoration: none;">
								<!-- <i class="fa fa-twitter-square fa-3x" style="margin-left: 30px;  color: white; /*#00acee;*/"></i> -->
								<img src="images/icone/RFI_logo.png" alt="" srcset="" style="border-radius: 100%; width: 50px">
							</a>
							<a href="https://www.youtube.com/channel/UCqp98DMd5D3eyPOQiSj_m2w" target="_blank" style="text-decoration: none;">
								<!-- <i class="fa fa-twitter-square fa-3x" style="margin-left: 30px;  color: white; /*#00acee;*/"></i> -->
								<img src="images/icone/youtube2.jpeg" alt="" srcset="" style="border-radius: 100%; width: 50px">
							</a>
							<!-- <i class="fa fa-google-plus-square fa-3x" style="margin-left: 30px; color: /*#4285F4;*/"></i> -->
						</div>
					</div>
				</div>

				<div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<!-- <span class="flaticon-education"></span> -->
						</div>
						<div class="media-body p-2 mt-3">
							<!-- <h3 class="heading">Formation qualifiante</h3> -->
							<!-- <p>Mettez un texte pour commenter vos formation.</p> -->
							<?php $i = 0;
							while ($ett = $aff2->fetch()) {
								$i++; ?>
								<img src="images/<?php echo $ett['photo'] ?>" alt="" style="width: 100%;">
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<!-- <span class="flaticon-diploma"></span> -->
						</div>
						<div class="media-body p-2 mt-3">
							<!-- <h3 class="heading">Attestation de fin de formation</h3> -->
							<!-- <p>Mettez un texte pour commenter l'attestation de fin de formation</p> -->
							<?php $i = 0;
							while ($et = $aff->fetch()) {
								$i++; ?>
								<img src="images/<?php echo $et['photo'] ?>" alt="" style="width: 100%;">
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
					<div class="img" style="background-image: url(images/IMG_2749_new.jpg); border"></div>
				</div>
				<div class="col-md-7 wrap-about py-3 pr-md-4 ftco-animate">
					<h2 class="mb-4">NOS SERVICES</h2>
					<p class="text-justify">Dans le cadre de son développement, le Centre de Formation Accélérée en Informatique (CFA. I) qui
						est spécialisé dans la formation aux métiers de l’informatique et la vulgarisation des nouvelles
						technologies de l’information et de la communication (NTIC) vient auprès de votre administration
						pour vous proposer un partenariat dans le cadre de ses offres de formation et de ses services.
					</p>
					<p class="text-justify">Notre Centre est agrée par le Ministère de l’Enseignement Technique, professionnel, de la
						formation qualifiante et de l’emploi.
						Nous formons dans les disciplines suivantes : la Bureautique ; la Comptabilité, l’Anglais, le
						Chinois ; l’Infographie ; l’Architecture et l’Électricité Bâtiment ; la Programmation ; les
						bases de données ; le Développement Web ; la Maintenance des ordinateurs et des Caméras de
						Surveillance ; le Réseau & Sécurité ainsi que la vente en pharmacie.</p>
					<p class="text-justify">Nous proposons aussi des prestations de services dans les domaines suivants : la réparation et le
						dépannage du matériel informatique (ordinateurs, imprimantes, photocopieuses) ; l’installation
						des logiciels ; l’entretien de systèmes, le dépannage et l’optimisation des réseaux
						informatiques ainsi que la création des sites internet.
						Nos tarifs et nos horaires sont très attractifs et accessibles à toutes les bourses (individus
						ou entreprises). Nous restons à votre disposition pour vous apporter les solutions à votre
						convenance.
					</p>
					<!-- <p>Mettez un texte pour commenter vos services</p> -->
					<div class="row mt-5">
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="ion-ios-settings"></span></div>
								<div class="text pl-3">
									<h3>Réparation & Dépannage</h3>
									<!-- <p>
											Ordinateur & Laptop <br>
											Imprimante & Traceur <br>
										</p> -->
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="ion-ios-print"></span></div>
								<div class="text pl-3">
									<h3>Impression</h3>
									<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<!-- ion-ios-clipboard -->
								<!-- ion-ios-document -->
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="ion-ios-paper"></span></div>
								<div class="text pl-3">
									<h3>Photocopie</h3>
									<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="ion-ios-grid"></span></div>
								<div class="text pl-3">
									<h3>Installation des systèmes d'exploitation</h3>
									<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="ion-ios-folder"></span></div>
								<div class="text pl-3">
									<h3>Installation des logiciels</h3>
									<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia.</p> -->
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="services-2 d-flex">
								<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="ion-ios-sync"></span></div>
								<div class="text pl-3">
									<h3>Mises à jour des logiciels</h3>
									<!-- <p>
											Installation & Entretien
										</p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/DSC_0070.jpg);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2 d-flex">
				<div class="col-md-6 align-items-stretch d-flex">
					<div class="img img-video d-flex align-items-center" style="background-image: url(images/about-2s.jpg);">
						<div class="video justify-content-center">
							<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>-->
						</div>
					</div>
				</div>
				<div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
					<h2 class="mb-4">Objectif</h2>
					<p class="text-justify">Le système éducatif congolais n’est pas encore outillé pour offrir à nos ressources humaines les
						capacités optimales pour affronter les défis d’aujourd’hui et de demain. Notre objectif est
						d’améliorer et d’augmenter l’employabilité des ressources humaines congolaises.</p>
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
	<script src="assets/js/fontawesome.js"></script>
	<script src="js/main.js"></script>

</body>

</html>