<?php
// session_start();
include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();

  if(isset($_POST['action'])){



        if($_POST['action']=='afficher'){
        $id = $_POST['id'];
        // $_SESSION['ide'] = $id;
        $rp = $db->query("SELECT * FROM `admin` WHERE id=$id");
        $row = $rp->fetch();

         
          $data['id']=$row['id'];
          $data['nom']=$row['nom'];
          $data['prenom']=$row['prenom'];
          $data['login']=$row['login'];

          $data['password']=$row['password'];
          $data['etat']=$row['etat'];
        

        echo json_encode($data);

      }

       if($_POST['action']=='modifier'){
        $id = $_POST['hidden_id'];
        $id = $_POST['id'];

        $nom = htmlentities(trim(addslashes(strip_tags($_POST['nom']))));
        $prenom = htmlentities(trim(addslashes(strip_tags($_POST['prenom']))));
        $login = htmlentities(trim(addslashes(strip_tags($_POST['login']))));
        $password = htmlentities(trim(addslashes(strip_tags($_POST['password']))));
        $etat = htmlentities(trim(addslashes(strip_tags($_POST['etat']))));

        $req = $db->exec("UPDATE `admin` SET `id`=$id,`nom`='$nom',`prenom`='$prenom',`login`='$login',`password`='$password',`etat`='$etat' WHERE id=$id ");

          echo  'modification effectuée...';

      }
	}




	 ?>