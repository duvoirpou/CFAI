<?php
 include ('models/classe_images.php');


if(isset($_POST['envoyer'])){
	//var_dump($_POST);exit;

	if(!empty($_POST['libelle'])){
	//var_dump($_POST);die();
	$libelle = htmlentities(trim($_POST['libelle']));
	$date_ajout = htmlentities(trim($_POST['date_ajout']));
	$heure_ajout = htmlentities(trim($_POST['heure_ajout']));
	$type_img = htmlentities(trim($_POST['type_img']));
	
	$photo	= htmlentities(trim($_FILES['photo']['name']));
	
	//tmp_name est un dossier temporaire
	$fichierTempo=$_FILES['photo']['tmp_name'];
	
	//chemin pour recevoir les photos du site
	//images nom du dossier et $nomPhoto fichier temporaire
	move_uploaded_file($fichierTempo, 'images/'.$photo);


	$AjouterImages = new Images(NULL,$photo,$libelle,$date_ajout,$heure_ajout,$type_img);

	$reponse = $AjouterImages->ajoutImages();

		
	if($reponse){
		echo "
			<script language='JavaScript'>
			alert('Effectué avec succès');
			document.location.replace('?c=images');
			</script>
				";
		//header('location:?c=espAdm');
	}
	
	
	}else{
		echo "
			<script language='JavaScript'>
			alert('Non effectué !');
			document.location.replace('?c=images');
			</script>
				";
		//header('location:?c=ajoutImm');
	}
	}


	

	include ('views/admin/images.php');
?>