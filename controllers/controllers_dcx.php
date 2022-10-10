<?php
	if(!empty($_SESSION['id_user'])){
		session_destroy();
		header('Location:?c=forum');
	}
?>