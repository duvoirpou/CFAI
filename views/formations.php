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
					<li class="nav-item"><a href="?c" class="nav-link pl-0">Accueil</a></li>
					<li class="nav-item"><a href="?c=apropos" class="nav-link">A propos</a></li>
					<li class="nav-item active"><a href="?c=formations" class="nav-link">Formations</a></li>
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

	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC_0133_new.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Cours</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="?c">Accueil <i
									class="ion-ios-arrow-forward"></i></a></span> <span>Formations <i
								class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container-fluid px-4" style="margin-top: -80px;">
			<div class="row">
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/DSC_0003.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">

							<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
						</p>
						<h3>Sécrétatriat bureautique</h3>
						<!-- <p>
							<a id="lire"
								href="javascript:document.getElementById('re001').style.display='block';document.getElementById('lire').style.display='none';document.getElementById('re001').releaseCapture();">
								<u>Voir plus </u>
							</a>
						</p> -->
						<div id="re001" >
							<div>
							<p class="text-justify">La bureautique est l'ensemble des techniques et des moyens tendant à automatiser les
							activités de bureau et, principalement, le traitement et la communication.</p>

							</div>
							<!-- <a
								href="javascript:document.getElementById('re001').style.display='none';document.getElementById('lire').style.display='block';document.getElementById('re001').releaseCapture();">
								<u>Fermer</u> -->
						</div>

						<!--<p><a href="#" class="btn btn-primary">Apply now</a></p>-->
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/1218605-ecrit32-766x438.gif);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">

							<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
						</p>
						<h3><a href="#">Anglais</a></h3>
						<!--<p>
							 <a id="lire2"
								href="javascript:document.getElementById('re002').style.display='block';document.getElementById('lire2').style.display='none';document.getElementById('re002').releaseCapture();">
								<u>Voir plus </u>
							</a>
						</p> -->
						<div id="re002" style="display:/*none;*/">
							<div>
							<p class="text-justify">La langue Anglaise est langue la plus parlée au monde sur les cinq continents, c’est aussi la langue de l’informatique.</p>
							</div>
							<!-- <a
								href="javascript:document.getElementById('re002').style.display='none';document.getElementById('lire2').style.display='block';document.getElementById('re002').releaseCapture();">
								<u>Fermer</u> -->
						</div>
						<p>
							<!--<a href="#" class="btn btn-primary">Apply now</a>-->
						</p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/DSC_0039.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">

							<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
						</p>
						<h3><a href="#">Infographie & Design</a></h3>
						<!-- <p>
							<a id="lire3"
								href="javascript:document.getElementById('re003').style.display='block';document.getElementById('lire3').style.display='none';document.getElementById('re003').releaseCapture();">
								<u>Voir plus </u>
							</a>
						</p> -->
						<div id="re003">
							<div>
							<p class="text-justify">L'infographie est le domaine de la création d'images numériques assistée par ordinateur. Cette activité est liée aux arts graphiques. Les études les plus courantes passent par les écoles publiques ou privées.</p>
							</div>
							<!-- <a
								href="javascript:document.getElementById('re003').style.display='none';document.getElementById('lire3').style.display='block';document.getElementById('re003').releaseCapture();">
								<u>Fermer</u> -->
						</div>
						<p>
							<!--<a href="#" class="btn btn-primary">Apply now</a>-->
						</p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/DSC_0146.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">

							<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>M. Koubonguissa</span> -->
						</p>
						<h3><a href="#">Maintenance informatique</a></h3>
						<p class="text-justify">La maintenance vise à maintenir ou à rétablir un bien dans un état spécifié afin que celui-ci
							soit en mesure d'assurer un service.</p>
						<p>
							<!-- <a href="#" class="btn btn-primary">Apply now</a>-->
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/téléchargement5.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">

							<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
						</p>
						<h3><a href="#">Reseau informatique</a></h3>
						<p class="text-justify">Un réseau informatique (en anglais, data communication network ou DCN) est un ensemble
							d'équipements reliés entre eux pour échanger des informations. </p>
						<p>
							<!--<a href="#" class="btn btn-primary">Apply now</a>-->
						</p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/images3.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">

							<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
						</p>
						<h3><a href="#">Programmation</a></h3>
						<p class="text-justify">La programmation, appelée aussi codage dans le domaine informatique, est l'ensemble des activités qui permettent l'écriture des programmes informatiques. C'est une étape importante du développement de logiciels (voire de matériel). L'écriture d'un programme se fait dans un langage de programmation. </p>
						<p>
							<!--<a href="#" class="btn btn-primary">Apply now</a>-->
						</p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/images4.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">

							<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
						</p>
						<h3><a href="#">Developpement web</a></h3>
						<p class="text-justify">La programmation Web, également appelée développement Web, est la création d'applications ou sites Web dynamiques. Le développement Web est un terme général pour le travail impliqué dans le développement d'un site Web pour Internet (World Wide Web) ou un intranet (un réseau privé). </p>
						<p>
							<!--<a href="#" class="btn btn-primary">Apply now</a>-->
						</p>
					</div>
				</div>
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url(images/téléchargement6.jpg);"></div>
					<div class="text pt-4">
						<p class="meta d-flex">

							<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>M. Koubonguissa</span> -->
						</p>
						<h3><a href="#">Comptabilité</a></h3>
						<!-- <p>
							<a id="lire4"
								href="javascript:document.getElementById('re004').style.display='block';document.getElementById('lire4').style.display='none';document.getElementById('re004').releaseCapture();">
								<u>Voir plus </u>
							</a>
						</p> -->
						<div id="re004">
							<div>
								<p class="text-justify">La comptabilité est un ensemble de conventions1 et de règles qui consistent à recueillir
								et compiler des données liées aux événements et aux opérations financières, afin de
								présenter dans une unité monétaire, la situation financière et les activités économiques
								d'une entité permettant aux utilisateurs de ce système d'information de comparer et
								analyser ces informations comptables et de prendre des décisions.</p>
							</div>
							<!-- <a
								href="javascript:document.getElementById('re004').style.display='none';document.getElementById('lire4').style.display='block';document.getElementById('re004').releaseCapture();">
								<u>Fermer</u> -->
						</div>
						<p>
							<!--<a href="#" class="btn btn-primary">Apply now</a>-->
						</p>
					</div>
					<p>
						<!-- <a href="#" class="btn btn-primary">Apply now</a>-->
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 course ftco-animate">
				<div class="img" style="background-image:url(images/téléchargement7.jpg);"></div>
				<div class="text pt-4">
					<p class="meta d-flex">

						<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
					</p>
					<h3><a href="#">Gestion du personnel</a></h3>
					<!-- <p>
						<a id="lire5"
							href="javascript:document.getElementById('re005').style.display='block';document.getElementById('lire5').style.display='none';document.getElementById('re005').releaseCapture();">
							<u>Voir plus </u>
						</a>
					</p> -->
					<div id="re005" >
						<div>
							<p class="text-justify">La gestion des ressources humaines ou GRH (anciennement gestion du personnel ; parfois
							appelé gestion du capital humain) est l'ensemble des pratiques mises en œuvre pour
							administrer, mobiliser et développer les ressources humaines impliquées dans l'activité
							d'une organisation.</p>
						</div>
						<!-- <a
							href="javascript:document.getElementById('re005').style.display='none';document.getElementById('lire5').style.display='block';document.getElementById('re005').releaseCapture();">
							<u>Fermer</u> -->
					</div>
					<!--<p>
						<a href="#" class="btn btn-primary">Apply now</a>
					</p>-->
				</div>
			</div>
			<div class="col-md-3 course ftco-animate">
				<div class="img" style="background-image: url(images/DSC_0201.jpg);"></div>
				<div class="text pt-4">
					<p class="meta d-flex">

						<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
					</p>
					<h3><a href="#">Architecture</a></h3>
					<p class="text-justify">L'architecture est l'art majeur de concevoir des espaces et de bâtir des édifices, en respectant des règles de construction empiriques ou scientifiques, ainsi que des concepts esthétiques, classiques ou nouveaux, de forme et d'agencement d'espace, en y incluant les aspects sociaux et environnementaux liés à la fonction de l'édifice et à son intégration dans son environnement, quelle que soit cette fonction : habitable, sépulcrale, rituelle, institutionnelle, religieuse, défensive, artisanale, commerciale, scientifique, signalétique, muséale, industrielle, monumentale, décorative, paysagère, voire purement artistique. </p>
					<p>
						<!--<a href="#" class="btn btn-primary">Apply now</a>-->
					</p>
				</div>
			</div>
			<div class="col-md-3 course ftco-animate">
				<div class="img" style="background-image: url(images/téléchargement8.jpg);"></div>
				<div class="text pt-4">
					<p class="meta d-flex">

						<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>Mr. Khan</span> -->
					</p>
					<h3><a href="#">Camera de surveillance</a></h3>
					<!-- <p>
						<a id="lire6"
							href="javascript:document.getElementById('re006').style.display='block';document.getElementById('lire6').style.display='none';document.getElementById('re006').releaseCapture();">
							<u>Voir plus </u>
						</a>
					</p> -->
					<div id="re006">
						<div>
						<p class="text-justify">Idéale pour garder un œil à distance sur son domicile, ses bureaux ou son magasin, la caméra de surveillance constitue un des composants clés du système d’alarme.</p>
						</div>
						<!-- <a
							href="javascript:document.getElementById('re006').style.display='none';document.getElementById('lire6').style.display='block';document.getElementById('re006').releaseCapture();">
							<u>Fermer</u> -->
					</div>
					<p>
						<!--<a href="#" class="btn btn-primary">Apply now</a>-->
					</p>
				</div>
			</div>
			<div class="col-md-3 course ftco-animate">
				<div class="img" style="background-image: url(images/logistique.jpg);"></div>
				<div class="text pt-4">
					<p class="meta d-flex">

						<!-- <span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
								<span><i class="icon-user mr-2"></i>M. Koubonguissa</span> -->
					</p>
					<h3><a href="#">Logistique</a></h3>
					<!-- <p>
						<a id="lire8"
							href="javascript:document.getElementById('re008').style.display='block';document.getElementById('lire8').style.display='none';document.getElementById('re008').releaseCapture();">
							<u>Voir plus </u>
						</a>
					</p> -->
					<div id="re008">
						<div>
							<p class="text-justify">La logistique et le transport sont deux activités économiques intimement liées. Qu'elles
							transitent par voie aérienne, maritime, routière ou ferroviaire, les marchandises doivent
							être prises en charge par un personnel qualifié tant avant leur expédition qu'après leur
							réception
							</p>
						</div>
						<!-- <a
							href="javascript:document.getElementById('re008').style.display='none';document.getElementById('lire8').style.display='block';document.getElementById('re008').releaseCapture();">
							<u>Fermer</u> -->
					</div>
					<p>
						<!-- <a href="#" class="btn btn-primary">Apply now</a>-->
					</p>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/DSC_0193.jpg)" data-stellar-background-ratio="0.5">
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

</body>

</html>