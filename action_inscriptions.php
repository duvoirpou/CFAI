<?php
// session_start();
include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();

  if(isset($_POST['action'])){



        if($_POST['action']=='afficher'){
        $id = $_POST['id'];
        // $_SESSION['ide'] = $id;
        $rp = $db->query("SELECT * FROM `apprenants` WHERE id_app=$id");
        $row = $rp->fetch();

         
          $data['id_app']=$row['id_app'];
          $data['nom']=$row['nom'];
          $data['prenom']=$row['prenom'];
          $data['date_naiss']=$row['date_naiss'];

          $data['lieu_naiss']=$row['lieu_naiss'];
          $data['sexe']=$row['sexe'];
          $data['adresse']=$row['adresse'];
          $data['cni']=$row['cni'];
          $data['email']=$row['email'];
          $data['tel']=$row['tel'];
          $data['date_insc']=$row['date_insc'];
          $data['nom_pere']=$row['nom_pere'];
          $data['prenom_pere']=$row['prenom_pere'];
          $data['adresse_pere']=$row['adresse_pere'];
          $data['ville_pere']=$row['ville_pere'];
          $data['tel_pere']=$row['tel_pere'];
          $data['nom_mere']=$row['nom_mere'];
          $data['prenom_mere']=$row['prenom_mere'];
          $data['adresse_mere']=$row['adresse_mere'];
          $data['ville_mere']=$row['ville_mere'];
          $data['tel_mere']=$row['tel_mere'];
          $data['formation']=$row['formation'];
          $data['etat']=$row['etat'];
        

        echo json_encode($data);

      }

       if($_POST['action']=='modifier'){
        $id = $_POST['hidden_id'];
        $id_app = $_POST['id_app'];

        $nom = htmlentities(trim(addslashes(strip_tags($_POST['nom']))));
        $prenom = htmlentities(trim(addslashes(strip_tags($_POST['prenom']))));
        $date_naiss = htmlentities(trim(addslashes(strip_tags($_POST['date_naiss']))));
        $lieu_naiss = htmlentities(trim(addslashes(strip_tags($_POST['lieu_naiss']))));
        $sexe = htmlentities(trim(addslashes(strip_tags($_POST['sexe']))));
        $adresse = htmlentities(trim(addslashes(strip_tags($_POST['adresse']))));
        $cni = htmlentities(trim(addslashes(strip_tags($_POST['cni']))));
        $email = htmlentities(trim(addslashes(strip_tags($_POST['email']))));
        $tel = htmlentities(trim(addslashes(strip_tags($_POST['tel']))));
        $date_insc = htmlentities(trim(addslashes(strip_tags($_POST['date_insc']))));
        $nom_pere = htmlentities(trim(addslashes(strip_tags($_POST['nom_pere']))));
        $prenom_pere = htmlentities(trim(addslashes(strip_tags($_POST['prenom_pere']))));
        $adresse_pere = htmlentities(trim(addslashes(strip_tags($_POST['adresse_pere']))));
        $ville_pere = htmlentities(trim(addslashes(strip_tags($_POST['ville_pere']))));
        $tel_pere = htmlentities(trim(addslashes(strip_tags($_POST['tel_pere']))));
        $nom_mere = htmlentities(trim(addslashes(strip_tags($_POST['nom_mere']))));
        $prenom_mere = htmlentities(trim(addslashes(strip_tags($_POST['prenom_mere']))));
        $adresse_mere = htmlentities(trim(addslashes(strip_tags($_POST['adresse_mere']))));
        $ville_mere = htmlentities(trim(addslashes(strip_tags($_POST['ville_mere']))));
        $tel_mere = htmlentities(trim(addslashes(strip_tags($_POST['tel_mere']))));
        $formation = htmlentities(trim(addslashes(strip_tags($_POST['formation']))));
        $etat = htmlentities(trim(addslashes(strip_tags($_POST['etat']))));
        //$paye = $avance + $reste;

        $req = $db->exec("UPDATE `apprenants` SET `id_app`=$id_app,`nom`='$nom',`prenom`='$prenom',`date_naiss`='$date_naiss',`lieu_naiss`='$lieu_naiss',`sexe`='$sexe',`adresse`='$adresse',`cni`='$cni',`email`='$email',`tel`='$tel',`date_insc`='$date_insc',`nom_pere`='$nom_pere',`prenom_pere`='$prenom_pere',`adresse_pere`='$adresse_pere',`ville_pere`='$ville_pere',`tel_pere`='$tel_pere',`nom_mere`='$nom_mere',`prenom_mere`='$prenom_mere',`adresse_mere`='$adresse_mere',`ville_mere`='$ville_mere',`tel_mere`='$tel_mere',`formation`='$formation',`etat`='$etat' WHERE id_app=$id ");

          echo  'modification effectuée...';

      }
	}




	 ?>