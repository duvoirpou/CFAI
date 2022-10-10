<?php
	include ('models/classe_images.php');
	include ('models/classe_videos.php');
	$listeImages = new Images(NULL,NULL,NULL,NULL,NULL,NULL);

	$aff = $listeImages->afficheProspectus();

	$listeImages2 = new Images(NULL,NULL,NULL,NULL,NULL,NULL);

	$aff2 = $listeImages2->afficheProspectus2();




	$listeVideos = new Videos(NULL,NULL,NULL,NULL,NULL,NULL);

	$affV = $listeVideos->afficheVideo();


	include ('views/acceuil.php');
?>