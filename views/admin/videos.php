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


        <div id="ajoutLiv" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form id="form_user" method="POST" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="libelles">Libelé</label>
                                        <input id="libelles" class="form-control" type="text" name="libelle" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_video">Type</label>
                                        <select class="form-control" name="type_video" id="type_video" required>
                                            <option value="" selected></option>
                                            <option value="VideoA">VideoA</option>
                                            <option value="VideoB">VideoB</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="videos">Video</label>
                                            <input name="video" class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <!-- <input type="hidden" name="date_ajout"> -->
                                        <input type="hidden" name="heure_ajout" value="<?php echo $heure; ?>">
                                        <!-- <button type="submit" name="envoyer" class="btn btn-success" style="float: right;">Enrégistrez</button> -->
                                        <!-- <input type="submit" name="envoyer" class="btn btn-success" style="float: right;" value="Enrégistrez"> -->
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div id="action_message" style="margin-right: 15px;"></div>
                                <div id="erreur_mdp" class="text-danger" style="margin-right: 15px;"></div>
                                <input type="hidden" name="action" id="action" value="inserer">
                                <input type="hidden" name="id_cache" id="id_cache" value="id_cache">
                                <input type="submit" name="form_users" id="form_users" class="btn btn-primary btn-sm" value="Enregister">
                                <!-- <input type="submit" name="form_action" id="form_action" class="btn btn-primary btn-lg form_action" value="ajouter" /> -->
                            </div>
                        </form>


                        <div class="progress" style="height: 35px;">
                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span class="sr-only">0% Complete</span>
                            </div>

                        </div><br>
                        <div id="msg"></div>


                    </div>
                </div>
            </div>
        </div>


        <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch Demo Modal</button> ->
        <div class="modal fade" id="Modal_msg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form method="post" id="user_forms" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" hidden>
                                <label for="id">Id:</label>
                                <input type="text" name="hidden_id" id="id" class="form-control " />

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                   
                                    <div class="form-group">
                                        <label for="id_video">ID</label>
                                        <input type="text" name="id_video" id="id_video" class="form-control "
                                            readonly />
                                        <span id="erreur_id_video" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="video">video</label>
                                        
                                        <input type="file" name="video" id="" class="form-control">
                                        <span id="erreur_video" class="text-danger"></span>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="libelle">libelle</label>
                                        <input type="text" name="libelle" id="libelle" class="form-control " />
                                        <span id="erreur_libelle" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" hidden>
                                        <label for="date_ajout">date_ajout</label>
                                        <input type="text" name="date_ajout" id="date_ajout" class="form-control " />
                                        <span id="erreur_date_ajout" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" hidden>
                                        <label for="heure_ajout">heure_ajout</label>
                                        <input type="" name="heure_ajout" id="heure_ajout" class="form-control " />

                                    </div>
                                </div>
                                <div class="col-md-6">




                                </div>
                            </div>



                            <div class="modal-footer">
                                <div class="form-group">
                                    <span id="action_alerts"></span>
                                    <input type="hidden" name="action" id="action" class="action" value="insert">
                                    <input type="hidden" name="hidden_id" id="hidden_id" class="hidden_id">
                                    <input type="submit" name="form_action" id="form_action" class="btn btn-primary btn-lg form_action" value="ajouter" />

                                </div>
                            </div>
                        </div>
                </form>
                
            </div>
        </div>
    </div>
    <!- modal -->


    <!-- <div class="modal fade" id="Modal_liste_vente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog " role="document">
                <form method="post" id="user_forms">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           

                        </div>
                </form>
            </div>
        </div>
    </div> -->

    <!-- modal -->


    <div class="modal fade" id="supprModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Voulez vous supprimer ?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="post" enctype="multipart/form-data" action="" id="confirm">
                    <div class="modal-body">
                        <input type="hidden" name="id_conf" id="id_conf">

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div id="msg" class="text-success"></div>
                        <button type="submit" class="btn btn-success" name="">Confirmer</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Videos</h1>
                    <h1 class="page-subhead-line">Voici la liste de vos videos.
                    </h1>
                    <!-- <button class="btn btn-primary ajout" style="float: right; margin-bottom: 30px;">Ajouter une vidéo</button> -->
                    <a href="?c=ajout_videos" class="btn btn-primary" style="float: right; margin-bottom: 30px;">Ajouter une vidéo</a>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered table-hover" id="affiche_msg">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Video</th>
                                    <th>Libelle</th>
                                    <th>Date d'ajout</th>
                                    <th>Heure d'ajout</th>
                                    <th>Type de video</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>

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
    <script src="js/videos.js"></script>
    <script src="js/upload.js"></script>


</body>

</html>