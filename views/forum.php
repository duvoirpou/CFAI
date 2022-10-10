<?php
/*session_start();
include('connexionBdd/connexionBdd.php');*/
if (isset($_SESSION['id_user'])) {
  header('location:forum.php');
}
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
</head>

<body id="body">

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
          <li class="nav-item "><a href="?c=inscription" class="nav-link">Inscription</a></li>
          <!-- <li class="nav-item"><a href="?c=reglement" class="nav-link">Règlement interieur</a></li> -->
          <li class="nav-item"><a href="machines.php" class="nav-link">Boutique</a></li>
          <li class="nav-item"><a href="videos.php" class="nav-link">Vidéos</a></li>
          <li class="nav-item"><a href="galerie.php" class="nav-link">Galerie</a></li>
          <li class="nav-item "><a href="?c=contact" class="nav-link">Contact</a></li>
          <li class="nav-item active"><a href="forum.php" class="nav-link">Commentaires</a></li>
          <?php if (isset($_SESSION['id_user'])) { ?>
          <li class="nav-item "><a href="?c=dcnx" class="nav-link">Déconnexion</a></li>
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
          <h1 class="mb-2 bread">Commentez</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php?c">Accueil <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Commentaires <i
                class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section" style="margin-top: -80px;">
    <div class="container">

      <?php if (!isset($_SESSION['id_user'])) { ?>
      <div class="jumbotron">
        <h1>Bienvenue !</h1>
        <p class="text-justify">Cet espace est réservé pour des commentaires liés au centre, aux formations et à tout ce qui concerne le domaine informatique. Notez que les commentaires seront lus par tous les utilisateurs ayant un compte sur ce site, mais avant de les lire et d'intervenir, vous devrez au préalable vous connecter sur le premier formulaire en dessous. Si vous n'avez pas de compte, veuillez en créer un sur le second formulaire plus bas svp !</p>
      </div>


      <form action="" method="post">
        <fieldset>
          <div class="row">
            <legend>
              <h2>Connectez-vous !</h2>
            </legend>
            <div class="col-md-6">
              <div class="form-group">
                <label for="ps">Pseudo</label>
                <input id="ps" class="form-control" type="text" name="login">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="pass">Mot de passe</label>
                <input id="pass" class="form-control" type="password" name="mdp">
                <span class="input-group-addon">
                  <input type="checkbox" aria-label="..." onclick="conf()" id="viewmdp"> <label for="viewmdp">Afficher
                    le mot de passe</label>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="submit" name="valider" value="Connexion" class="btn btn-primary py-3 px-5"
                  style="margin-top: 50px;">
              </div>
            </div>
          </div>
        </fieldset>
      </form>

      <!-- ################################################################################## -->

      <form action="" method="post" enctype="multipart/form-data" id="formulaire" style="margin-top: 100px;">
        <fieldset>
          <legend>
            <h2> Inscrivez-vous ! </h2>
          </legend>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="nom_user">Nom (s)</label>
                <input id="nom_user" class="form-control" type="text" name="nom_user">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="prenom_user">Prénom (s)</label>
                <input id="prenom_user" class="form-control" type="text" name="prenom_user">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="sexe">Sexe</label>
                <select id="sexe" class="form-control" name="sexe">
                  <option></option>
                  <option>M</option>
                  <option>F</option>
                </select>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="tel">Téléphone</label>
                <input id="tel" class="form-control" type="text" name="tel">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input id="pseudo" class="form-control" type="text" name="pseudo">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="mpass">Mot de passe</label>
                <input id="mpass" class="form-control long" type="password" name="mpass">
                <span class="input-group-addon">
                  <input type="checkbox" aria-label="..." onclick="myfunction()" id="viewpsw"> <label
                    for="viewpsw">Afficher le mot de passe</label>
                </span>
                <div class="alert alert-warning" id="erreur_mdp" style="display: none; position: absolute;">
                  <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                  <!-- <strong>Attention !</strong>  -->Nous vous récommandons d'entrer un mot de passe de 5
                  caractères minimum.
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="confirm">Confirmation du mot de passe</label>
                <input id="confirm" class="form-control" type="password" name="confirm"
                  placeholder="Veuillez saisir le même mot de passe svp !">
                <span class="input-group-addon">
                  <input type="checkbox" aria-label="..." onclick="mafonction()" id="viewconf"> <label
                    for="viewconf">Afficher le mot de passe</label>
                </span>
              </div>
            </div>
            <div class="col">
              <div class="form-group" hidden>
                <label for="permis">permis </label>
                <input id="permis" class="form-control" type="text" name="permis" value="1">
              </div>
            </div>
          </div>
        </fieldset>
        <div id="msg" title="">

        </div>

        <div class="form-group">
          <input type="hidden" name="action" id="action" class="form-control">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="submit" value="Enrégistrer" class="btn btn-primary py-3 px-5" style="margin-top: 50px;">
            </div>
          </div>
        </div>
      </form>
      <?php } else {

        $tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
        $date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
        $mois = $tab_mois[date("n")];
        $d = date('j') . ' ' . $mois . ' ' . date('Y') . ' ' . date('H') . 'h ' . date('i') . 'm ' . date('s') . 's ';


        //$d = date('j M Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
        //$mois = date('M');
        $annee = date('Y');
        $heure = date('H');
        $minute = date('i');
        $date_comment = date('j M Y');

      ?>



      <p>
        <form action="" method="post">
          <textarea id="message" name="commentaire" cols="40" rows="4" placeholder="Commenter..."></textarea>
          <input type="number" name="id_user" placeholder="id_user" value="<?php echo $_SESSION['id_user'] ?>" hidden />
          <input type="number" name="annee_commentaire" placeholder="annee_commentaire" value="<?php echo $annee ?>"
            hidden />
          <input type="text" name="heure_commentaire" placeholder="heure_commentaire" value="<?php echo $heure ?>"
            hidden />
          <input type="text" name="minute_commentaire" placeholder="minute_commentaire" value="<?php echo $minute ?>"
            hidden />
          <input type="text" name="date_commentaire" placeholder="minute_commentaire" value="<?php echo $date_jour ?>"
            hidden />

          <input type="submit" name="publier" value="Commentez" style="margin-top: -28px; margin-left: 0px;"
            class="btn btn-primary py-2 px-3" />
        </form>
      </p>

      <?php } ?>
    </div>

  </section>

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/DSC_0168.jpg)"
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
        stroke="#F96D00" />
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
  <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="js/forum.js"></script>
  <script>
    function myfunction() {
      var x = document.getElementById('mpass');
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }

    }

    function mafonction() {
      var y = document.getElementById('confirm');
      if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }

    }

    function conf() {
      var z = document.getElementById('pass');
      if (z.type === "password") {
        z.type = "text";
      } else {
        z.type = "password";
      }

    }




    $(document).ready(function () {
      // notre code ici

      var $pseudo = $('#pseudo'),
        $nom = $('#nom'),
        $prenom = $('#prenom'),

        $mpass = $('#mpass'),
        $confirm = $('#confirm'),
        $tel = $('#tel'),
        $sexe = $('#sexe'),
        $envoi = $('#envoi'),
        $reset = $('#rafraichir'),
        $erreur_mdp = $('#erreur_mdp'),
        $erreur_confirm = $('#erreur_confirm'),
        $champ = $('.champ');
      $long = $('.long');


      $long.keyup(function () {
        if ($(this).val().length < 5) { // si la chaîne de caractères est inférieure à 5
          $erreur_mdp.css('display', 'block'); // on affiche le message d'erreur
          $(this).css({ // on rend le champ rouge
            borderColor: 'red',
            color: 'red'
          });
        } else {
          $erreur_mdp.css('display', 'none'); // on cache le message d'erreur
          $(this).css({ // si tout est bon, on le rend vert
            borderColor: 'green',
            color: 'green'
          });
        }
      });





      $confirm.keyup(function () {
        if ($(this).val() != $mpass.val()) { // si la confirmation est différente du mot de passe
          $(this).css({ // on rend le champ rouge
            borderColor: 'red',
            color: 'red'
          });
        } else {
          $(this).css({ // si tout est bon, on le rend vert
            borderColor: 'green',
            color: 'green'
          });
        }
      });




      function verifier(champ) {
        if (champ.val() == "") { // si le champ est vide
          $erreur.css('display', 'block'); // on affiche le message d'erreur
          champ.css({ // on rend le champ rouge
            borderColor: 'red',
            color: 'red'
          });
        }
      }




    });
  </script>
</body>

</html>