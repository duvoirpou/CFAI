<?php
session_start();
include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();

  if(isset($_POST['action'])){
    if($_POST['action']=='inserer'){

			$libelle = htmlentities(trim($_POST['libelle']));
      // $date_ajout = htmlentities(trim($_POST['date_ajout']));
      $heure_ajout = htmlentities(trim($_POST['heure_ajout']));
      $type_video = htmlentities(trim($_POST['type_video']));
      
      $video = htmlentities(trim($_FILES['video']['name']));
	var_dump($_FILES); die();
      //tmp_name est un dossier temporaire
      $fichierTempo=$_FILES['video']['tmp_name'];
      
      //chemin pour recevoir les videos du site
      //images nom du dossier et $nomvideo fichier temporaire
      move_uploaded_file($fichierTempo, 'videos/'.$video);

			$sql= $db->prepare("INSERT INTO `videos`(`video`, `libelle`, `date_ajout`, `heure_ajout`, `type_video`) VALUES (:video,:libelle,CURRENT_DATE(),:heure_ajout,:type_video)");

			if($sql->execute(array(':video' => $video, ':libelle' => $libelle, ':heure_ajout' => $heure_ajout, ':type_video' => $type_video))){

				echo '<h6 class="text-success">enregistrement effectué avec succès</h6>';

				}
				else
				{

					echo '<h6 class="text-danger">Echec d\'enregistrement</h6>';

				}
			}
  }

        if($_POST['action']=='afficher'){
        $id = $_POST['id'];
        $rp = $db->query("SELECT * FROM `videos` WHERE id_video=$id");
        $row = $rp->fetch();

         
          $data['id_video']=$row['id_video'];
          $data['video']=$row['video'];
          $data['libelle']=$row['libelle'];
          $data['date_ajout']=$row['date_ajout'];
          $data['heure_ajout']=$row['heure_ajout'];
          $data['type_video']=$row['type_video'];
        

        echo json_encode($data);

      }

       if($_POST['action']=='modifier'){
        $id = $_POST['hidden_id'];
        $id_video = $_POST['id_video'];


        if (!empty($_POST['video'])) {
          
          $video = htmlentities(trim(addslashes(strip_tags($_POST['video']))));
        $libelle = htmlentities(trim(addslashes(strip_tags($_POST['libelle']))));
        $date_ajout = htmlentities(trim(addslashes(strip_tags($_POST['date_ajout']))));
        $heure_ajout = htmlentities(trim(addslashes(strip_tags($_POST['heure_ajout']))));
        $type_video = htmlentities(trim(addslashes(strip_tags($_POST['type_video']))));

        $req = $db->exec("UPDATE `videos` SET `id_video`=$id_video,`video`='$video',`libelle`='$libelle',`date_ajout`='$date_ajout',`heure_ajout`='$heure_ajout',`type_video`='$type_video' WHERE id_video=$id ");

          echo  'modification effectuée...';
        } 
        if(empty($_POST['video'])) {
        $libelle = htmlentities(trim(addslashes(strip_tags($_POST['libelle']))));
        $date_ajout = htmlentities(trim(addslashes(strip_tags($_POST['date_ajout']))));
        $heure_ajout = htmlentities(trim(addslashes(strip_tags($_POST['heure_ajout']))));
        $type_video = htmlentities(trim(addslashes(strip_tags($_POST['type_video']))));

        $req = $db->exec("UPDATE `videos` SET `id_video`=$id_video,`libelle`='$libelle',`date_ajout`='$date_ajout',`heure_ajout`='$heure_ajout',`type_video`='$type_video' WHERE id_video=$id ");

          echo  'modification effectuée...';
        }

        

      }
	




	 ?>