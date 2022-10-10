<?php
 include ('models/classe_admin.php');


	
	if(isset($_POST['envoyer'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['login']) AND !empty($_POST['password'])){
		
		$login	= htmlentities(trim($_POST['login']));
		$password		= htmlentities(trim($_POST['password']));
		
		
		$cnxUser = new Admin (NULL,NULL,NULL,NULL,NULL,NULL);
	
		$reponse = $cnxUser->connexionSiteAdmin($login,$password);
			
		if($reponse){

			//ajout des sessions
						$_SESSION['id']		=$reponse->id;
						$_SESSION['nom']		=$reponse->nom;
						$_SESSION['prenom']		=$reponse->prenom;
						$_SESSION['login']		=$reponse->login;
						
						
						
			header('location:?c=index');
		}else{
			header('location:?c=connexion');
		}
	
	}else{
		header('location:?c=connexion');
	}

}

	include ('views/admin/login.php');
?>