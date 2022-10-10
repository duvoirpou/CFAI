<?php
error_reporting(0);
	include('connexionBdd/connexionBdd.php');
	
	$limit = ( isset($_GET['limit']) ) ? $_GET['limit'] : 12;
	$page = ( isset($_GET['page']) ) ? $_GET['page'] : 1;
	$links = ( isset($_GET['links']) ) ? $_GET['links'] : 7;

	

	$query = "SELECT * FROM `images` WHERE `type_img`='Archive' ORDER BY id_img DESC ";

	require_once 'paginator.class.php';
	$paginator = new Paginator($dbh, $query);
	$results = $paginator->getData($limit, $page);




//======================================================================


?>