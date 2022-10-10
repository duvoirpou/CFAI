﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CFAI</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="images/img_cfai.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="" method="post">
                                    <hr />
                                    <h5>Identifiez-vous !</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="login" placeholder="Votre identifiant " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" id="password"/>
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="" onclick="myfunction()" id="viewpsw"> Afficher le mot de passe
                                            </label>
                                            <span class="pull-right">
                                                   <!-- <a href="index.html" >Forget password ? </a>  -->
                                            </span>
                                        </div>
                                     <input type="submit" class="btn btn-primary" name="envoyer" value="Connexion">
                                     <!-- <a href="index.html" class="btn btn-primary ">Connexion</a> -->
                                    <hr />
                                    <!-- Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a>  -->
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>
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