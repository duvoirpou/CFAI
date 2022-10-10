<?php
// session_start();
include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();

  if(isset($_POST['action'])){



        if($_POST['action']=='afficher'){
        $id = $_POST['id'];
        // $_SESSION['ide'] = $id;
        $rp = $db->query("SELECT * FROM `contact` WHERE id_contact=$id");
        $row = $rp->fetch();

         
          $data['id_contact']=$row['id_contact'];
          $data['identite']=$row['identite'];
          $data['tel']=$row['tel'];
          $data['msg']=$row['msg'];

          $data['date_message']=$row['date_message'];
          $data['mois_message']=$row['mois_message'];
          $data['annee_message']=$row['annee_message'];
          $data['heure_message']=$row['heure_message'];
          // $data['statut']=$row['statut'];
        

        echo json_encode($data);

      }

       if($_POST['action']=='modifier'){
        $id = $_POST['hidden_id'];
        $id_contact = $_POST['id_contact'];

        $identite = htmlentities(trim(addslashes(strip_tags($_POST['identite']))));
        $tel = htmlentities(trim(addslashes(strip_tags($_POST['tel']))));
        $msg = htmlentities(trim(addslashes(strip_tags($_POST['msg']))));
        $date_message = htmlentities(trim(addslashes(strip_tags($_POST['date_message']))));
        $mois_message = htmlentities(trim(addslashes(strip_tags($_POST['mois_message']))));
        $annee_message = htmlentities(trim(addslashes(strip_tags($_POST['annee_message']))));
        $heure_message = htmlentities(trim(addslashes(strip_tags($_POST['heure_message']))));
        $statut = htmlentities(trim(addslashes(strip_tags($_POST['statut']))));
        //$paye = $avance + $reste;

        $req = $db->exec("UPDATE `contact` SET `id_contact`=$id_contact,`identite`='$identite',`tel`='$tel',`msg`='$msg',`date_message`='$date_message',`mois_message`='$mois_message',`annee_message`='$annee_message',`heure_message`='$heure_message',`statut`='$statut' WHERE id_contact=$id ");

          echo  'modification effectuée...';

      }
	}




	 ?>