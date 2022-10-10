<?php
 include ('models/classe_videos.php');


if(isset($_POST['envoyer'])){
	//var_dump($_POST);exit;

	if(!empty($_POST['libelle'])){
	//var_dump($_POST);die();
	$libelle = htmlentities(trim($_POST['libelle']));
	$date_ajout = htmlentities(trim($_POST['date_ajout']));
	$heure_ajout = htmlentities(trim($_POST['heure_ajout']));
	
	$video	= htmlentities(trim($_FILES['video']['name']));
	
	//tmp_name est un dossier temporaire
	$fichierTempo=$_FILES['video']['tmp_name'];
	
	//chemin pour recevoir les videos du site
	//images nom du dossier et $nomvideo fichier temporaire
	move_uploaded_file($fichierTempo, 'images/'.$video);


	$AjouterVideos = new Videos(NULL,$video,$libelle,$date_ajout,$heure_ajout);

	$reponse = $AjouterVideos->ajoutVideos();

		
	if($reponse){
		echo "
			<script language='JavaScript'>
			alert('Effectué avec succès');
			document.location.replace('?c=videos');
			</script>
				";
		//header('location:?c=espAdm');
	}
	
	
	}else{
		echo "
			<script language='JavaScript'>
			alert('Non effectué !');
			document.location.replace('?c=videos');
			</script>
				";
		//header('location:?c=ajoutImm');
	}
	}


	

	include ('views/admin/videos.php');
?>