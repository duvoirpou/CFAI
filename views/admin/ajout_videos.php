<?php
	if(!$_SESSION['id']){
		header('location:?c=connexion');
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CFAI</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/DataTableBootstrap3.3.7/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.min.css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?c=index">ADMINISTRATION</a>
            </div>

            <div class="header-right">
                <?php
 $db = connexionBdd();
 $req = $db->query("SELECT * FROM `contact` WHERE statut = 'Nouveau message'"); 
 $rows = $req->rowCount();
 
 $requete = $db->query("SELECT * FROM `apprenants` WHERE `etat`='en cours'"); 
 $lignes = $requete->rowCount();
?>
                <a href="?c=messages" class="btn btn-info" title="Nouveau Message"><b><?php echo $rows; ?> </b><i
                        class="fa fa-envelope-o fa-2x"></i></a>

                <a href="?c=inscriptions" class="btn btn-info" title="Nouvelle inscription"><b><?php echo $lignes; ?>
                    </b><i class="fa fa-square-o fa-2x"></i></a>
                <!-- <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i
                        class="fa fa-bars fa-2x"></i></a> -->
                <a href="?c=dcnxAdmin" class="btn btn-danger" title="Logout"><i
                        class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>

        <?php include('menu.php'); 

$d = date('j M Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
$date = date('j M Y');
$mois = date('M');
$annee = date('Y');
$heure = date('H').'h '.date('i').'m '.date('s').'s ';
$minute = date('i');

?>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Videos</h1>
                    <h1 class="page-subhead-line">Ajouter une video.
                    </h1>
                    <!-- <button class="btn btn-primary ajout" style="float: right; margin-bottom: 30px;">Ajouter une vidéo</button> -->
                    
                </div>
            </div>
            <!-- /. ROW  -->
            
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Choisissez la vidéo</label>
                                <!-- <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"> -->
                                <input type="file" name="video" id="video" class="form-control" placeholder="" aria-describedby="videos" required>
                                <small id="videos" class="text-muted">video</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="libelle">Entrez le libellé de la vidéo</label>
                              <input type="text" name="libelle" id="libelle" class="form-control" placeholder="" aria-describedby="lib" required>
                              <small id="lib" class="text-muted">libelle</small>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="libelle">Selectionnez le type de vidéos</label>
                              <!-- <input type="text" name="libelle" id="libelle" class="form-control" placeholder="" aria-describedby="libelle"> -->
                              <select name="type_video" id="type_video" class="form-control" required>
                                <option value=""></option>
                                <option value="Acceuil">Acceuil</option>
                                <option value="Galerie">Galerie</option>
                              </select>
                              <small id="type" class="text-muted">type de vidéo</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" hidden>
                                <label for=""></label>
                                <input type="text" name="heure_ajout" id="heure_ajout" class="form-control" value="<?php echo $heure; ?>" placeholder="" aria-describedby="heure">
                                <small id="heure" class="text-muted">heure</small>
                            </div>
                            <div class="form-group" hidden>
                                <label for=""></label>
                                <input type="text" name="date_ajout" id="date_ajout" class="form-control" value="<?php echo $heure; ?>" placeholder="" aria-describedby="heure">
                                <small id="date" class="text-muted">date</small>
                            </div>
                        </div>
                        
                    </div>
                    <button type="submit" name="envoyer" class="btn btn-success" style="float: right;">Enrégistrez</button>
                    </form>
               

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php include ('footer.php'); ?>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS
    <script src="assets/js/custom.js"></script> -->

    <!-- DataTable -->
    <script src="assets/DataTableBootstrap3.3.7/js/jquery.dataTables.min.js"></script>
    <script src="assets/DataTableBootstrap3.3.7/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>


</body>

</html>