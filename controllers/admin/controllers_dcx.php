<?php
	if(!empty($_SESSION['id'])){
		session_destroy();
		header('Location:?c=connexion');
	}
?>