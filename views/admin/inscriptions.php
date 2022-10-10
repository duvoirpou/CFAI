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
        <!-- /. NAV TOP  -->
        <?php include('menu.php'); ?>


        <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch Demo Modal</button> -->
        <div class="modal fade" id="Modal_msg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form method="post" id="user_forms">
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
                                    <!-- <div class="form-group">
                                        <?php //include("fonction_client.php"); ?>
                                        <label for="id_cmd">Client</label>
                                        <select name="id_client" id="id_client" class="form-control form-control-sm ">
                                            <?php //echo affiche_client(); ?>
                                        </select>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="id_app">ID</label>
                                        <input type="text" name="id_app" id="id_app" class="form-control " readonly />
                                        <span id="erreur_id_app" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom">Nom de l'apprenant</label>
                                        <input type="text" name="nom" id="nom" class="form-control " readonly />
                                        <span id="erreur_nom" class="text-danger"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prenom">Prénom de l'apprenant</label>
                                        <input type="text" name="prenom" id="prenom" class="form-control " readonly />
                                        <span id="erreur_prenom" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_naiss">Date de naissance</label>
                                        <!-- <textarea name="date_naiss" id="date_naiss" class="form-control "
                                            readonly></textarea> -->
                                        <input type="date" name="date_naiss" id="date_naiss" class="form-control "
                                            readonly />
                                        <span id="erreur_date_naiss" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lieu_naiss">Lieu de naissance</label>
                                        <input type="text" name="lieu_naiss" id="lieu_naiss" class="form-control "
                                            readonly />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sexe">Sexe</label>
                                        <!-- <input type="text" name="sexe" id="sexe" class="form-control " /> -->
                                        <select id="sexe" class="form-control" name="sexe" id="sexe" readonly>
                                            <option></option>
                                            <option>M</option>
                                            <option>F</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" name="adresse" id="adresse" class="form-control " readonly />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cni">CNI</label>
                                        <input type="text" name="cni" id="cni" class="form-control " readonly />

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control " readonly />

                                    </div>
                                    <!-- -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tel">Tel</label>
                                        <input type="text" name="tel" id="tel" class="form-control " readonly />

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="date_insc">Date d'inscription</label>
                                        <input type="date" name="date_insc" id="date_insc" class="form-control "
                                            readonly />

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="nom_pere">Nom du père</label>
                                        <input type="text" name="nom_pere" id="nom_pere" class="form-control "
                                            readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prenom_pere">Prénom du père</label>
                                        <input type="text" name="prenom_pere" id="prenom_pere" class="form-control "
                                            readonly />

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="adresse_pere">Adresse du père</label>
                                        <input type="text" name="adresse_pere" id="adresse_pere" class="form-control "
                                            readonly />

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       
<label for="ville_pere">Ville du père</label>
                                        <input type="text" name="ville_pere" id="ville_pere" class="form-control "
                                            readonly />

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="tel_pere">Tel du père</label>
                                        <input type="text" name="tel_pere" id="tel_pere" class="form-control "
                                            readonly />

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="nom_mere">Nom de la mère</label>
                                        <input type="text" name="nom_mere" id="nom_mere" class="form-control "
                                            readonly />

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="prenom_mere">Prénom de la mère</label>
                                        <input type="text" name="prenom_mere" id="prenom_mere" class="form-control "
                                            readonly />

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="adresse_mere">Adresse de la mère</label>
                                        <input type="text" name="adresse_mere" id="adresse_mere" class="form-control "
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ville_mere">Ville de la mère</label>
                                        <input type="text" name="ville_mere" id="ville_mere" class="form-control "
                                            readonly />

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tel_mere">Tel de la mère</label>
                                        <input type="text" name="tel_mere" id="tel_mere" class="form-control "
                                            readonly />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formation">Formation</label>
                                        <input type="text" name="formation" id="formation" class="form-control "
                                            readonly />

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="etat">Etat</label>
                                        <select id="etat" class="form-control" name="etat" id="etat">
                                            <option></option>
                                            <option>en cours</option>
                                            <option>traité</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        

                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="form-group">
                                    <span id="action_alerts"></span>
                                    <input type="hidden" name="action" id="action" class="action" value="insert">
                                    <input type="hidden" name="hidden_id" id="hidden_id" class="hidden_id">
                                    <input type="submit" name="form_action" id="form_action"
                                        class="btn btn-primary btn-lg form_action" value="ajouter" />

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


    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Inscriptions</h1>
                    <h1 class="page-subhead-line">Voici la liste des inscriptions en ligne.
                    </h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Default Panel</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-responsive table-striped table-bordered table-hover" id="affiche">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom & Prénom</th>
                                            <th>Date & lieu de naissance</th>
                                            <!-- <th>Lieu de naissance</th> -->
                                            <th>Sexe</th>
                                            <th>Adresse</th>
                                            <th>CNI</th>
                                            <th>Email</th>
                                            <th>Téléphone</th>
                                            <!-- <th>Date d'inscription</th>
                                            <th>Nom & prénom du père</th>
                                            <th>Adresse du père</th>
                                            <th>Ville du père</th>
                                            <th>Téléphone du père</th>
                                            <th>Nom & prénom de la mère</th>
                                            <th>Adresse de la mère</th>
                                            <th>Ville de la mère</th>
                                            <th>Téléphone de la mère</th> -->
                                            <th>Formation</th>
                                            <th>Etat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
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
    <script src="js/inscriptions.js"></script>


</body>

</html>