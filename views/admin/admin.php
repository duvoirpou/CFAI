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
                                        <label for="id_contact">ID</label>
                                        <input type="text" name="id" id="id_contact" class="form-control " readonly/>
                                        <span id="erreur_id_contact" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom">nom</label>
                                        <input type="text" name="nom" id="nom" class="form-control " />
                                        <span id="erreur_nom" class="text-danger"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prenom">prenom</label>
                                        <input type="text" name="prenom" id="prenom" class="form-control " />
                                        <span id="erreur_prenom" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="login">login</label>
                                        <input type="text" name="login" id="login" class="form-control " />
                                        <span id="erreur_login" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" name="password" id="password" class="form-control " />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="viewpsw"> Afficher le mot de passe</label>
                                                <input type="checkbox" class="form-control" name="" onclick="myfunction()" id="viewpsw">
                                            
                                            
                                        </div>


                                    <div class="form-group" hidden>
                                        <label for="etat">Etat</label>
                                        <input type="text" name="etat" id="etat" class="form-control " />

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
                    <h1 class="page-head-line">Admin</h1>
                    <h1 class="page-subhead-line">Voici la liste des admins.
                    </h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered table-hover" id="affiche">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Identifiant ou login</th>
                                    <!-- <th>Mot de passe</th> -->
                                    <th>action</th>
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
    <script src="js/admin.js"></script>
<script>
        function myfunction() {
            var x = document.getElementById('password');
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

        }
    </script>

</body>

</html>