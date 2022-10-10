<?php
// session_start();
include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();

  if(isset($_POST['action'])){



        if($_POST['action']=='afficher'){
        $id = $_POST['id'];
        $rp = $db->query("SELECT * FROM `images` WHERE id_img=$id");
        $row = $rp->fetch();

         
          $data['id_img']=$row['id_img'];
          $data['photo']=$row['photo'];
          $data['libelle']=$row['libelle'];
          $data['date_ajout']=$row['date_ajout'];
          $data['heure_ajout']=$row['heure_ajout'];
        

        echo json_encode($data);

      }

       if($_POST['action']=='modifier'){
        $id = $_POST['hidden_id'];
        $id_img = $_POST['id_img'];

        
        // $photo = htmlentities(trim(addslashes(strip_tags($_POST['photo']))));
        $libelle = htmlentities(trim(addslashes(strip_tags($_POST['libelle']))));
        $date_ajout = htmlentities(trim(addslashes(strip_tags($_POST['date_ajout']))));
        $heure_ajout = htmlentities(trim(addslashes(strip_tags($_POST['heure_ajout']))));

        $photo	= htmlentities(trim($_FILES['photo']['name']));
		
		
		//tmp_name est un dossier temporaire
		$fichierTempo=$_FILES['photo']['tmp_name'];
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		move_uploaded_file($fichierTempo, 'images/'.$photo);


        $req = $db->exec("UPDATE `images` SET `id_img`=$id_img,`photo`='$photo',`libelle`='$libelle',`date_ajout`='$date_ajout',`heure_ajout`='$heure_ajout' WHERE id_img=$id ");

          echo  'modification ...';

      
      
      }
	}




	 ?>