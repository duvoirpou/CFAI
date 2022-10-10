<?php
error_reporting(0);
	include('connexionBdd/connexionBdd.php');
	
	$limit = ( isset($_GET['limit']) ) ? $_GET['limit'] : 12;
	$page = ( isset($_GET['page']) ) ? $_GET['page'] : 1;
	$links = ( isset($_GET['links']) ) ? $_GET['links'] : 7;

	

	$query = "SELECT * FROM `videos` WHERE `type_video`='Galerie' ORDER BY id_video DESC ";

	require_once 'paginator.class.php';
	$paginator = new Paginator($dbh, $query);
	$results = $paginator->getData($limit, $page);




//======================================================================


?>