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
                <a href="?c=messages" class="btn btn-info" title="Nouveau Message"><b><?php echo $rows; ?> </b><i class="fa fa-envelope-o fa-2x"></i></a>
                
                <a href="?c=inscriptions" class="btn btn-info" title="Nouvelle inscription"><b><?php echo $lignes; ?> </b><i class="fa fa-square-o fa-2x"></i></a>
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


        <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="libelles">Libelé</label>
                                        <input id="libelles" class="form-control" type="text" name="libelle" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <label for="type_img">Type</label>
                                        <select class="form-control" name="type_img" id="type_img" required>
                                                <option value="" selected></option>
                                                <option value="Archive">Archive</option>
                                                <option value="Prospectus">Prospectus</option>
                                                <option value="Machines a vendre">Machines à vendre</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="custom-file">
                                        <label for="photos" class="custom-file-label">Photo</label>
                                        <input id="photos" class="custom-file-input" type="file" name="photo" required>
                                        <!-- <label for="" class="custom-file-label">Text</label> -->
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="date_ajout">
                                        <input type="hidden" name="heure_ajout" value="<?php echo $heure; ?>">
                                        <button type="submit" name="envoyer" class="btn btn-success"
                                            style="float: right;">Enrégistrez</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch Demo Modal</button> -->
        <div class="modal fade" id="Modal_msg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form method="post" id="user_forms" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Modifier l'image</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" hidden>
                                <label for="id">Id:</label>
                                <input type="text" name="hidden_id" id="id" class="form-control " />

                            </div>

                            <div class="row">
                                <div hidden>
                                    <!-- <div class="form-group">
                                        <?php //include("fonction_client.php"); ?>
                                        <label for="id_cmd">Client</label>
                                        <select name="id_client" id="id_client" class="form-control form-control-sm ">
                                            <?php //echo affiche_client(); ?>
                                        </select>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="id_img">ID</label>
                                        <input type="text" name="id_img" id="id_img" class="form-control " readonly />
                                        <span id="erreur_id_msg" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="libelle">libelle</label>
                                        <input type="text" name="libelle" id="libelle" class="form-control"  />
                                        <span id="erreur_libelle" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="photo">photo</label>
                                        <input type="file" name="photo" class="form-control form-control-sm" id=""/>
                                        <span id="erreur_photo" class="text-danger"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_ajout">Date d'ajout</label>
                                        <input type="date" name="date_ajout" id="date_ajout" class="form-control " readonly>
                                        
                                        <span id="erreur_date_ajout" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="heure_ajout">Heure d'ajout</label>
                                        <input type="text" name="heure_ajout" id="heure_ajout" class="form-control " readonly />
                                    </div>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <div class="form-group">
                                    <span id="action_alerts"></span>
                                    <input type="hidden" name="action" id="action" class="action" value="insert">
                                    <input type="hidden" name="hidden_id" id="hidden_id" class="hidden_id">
                                    <input type="submit" name="form_action" id="form_action" class="btn btn-primary form_action" value="ajouter" />

                                </div>
                            </div>
                        </div>
                </form>
                <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> -->
            </div>
        </div>
    </div>
    <!-- modal -->


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
                    <h1 class="page-head-line">Images</h1>
                    <h1 class="page-subhead-line">Voici la liste de vos images.
                    </h1>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#my-modal"
                        style="float: right; margin-bottom: 30px;">Ajouter une image</button>
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
                                    <th>Photo</th>
                                    <th>Libelle</th>
                                    <th>Date d'ajout</th>
                                    <th>Heure d'ajout</th>
                                    <th>Type</th>
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
    <script src="js/images.js"></script>


</body>

</html>