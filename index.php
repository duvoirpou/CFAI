<?php
// Start the session
session_start();
//index.php : va centraliser toutes les pages
if(isset($_GET['c'])){
	$ctrl = $_GET['c'];
}
else{
	$ctrl = NULL;
}

include('connexionBdd/connexionBdd.php');

switch($ctrl){

	// Admin
	case 'admin':
		include('controllers/admin/controllers_admin.php');
    break;
    	
	case 'espAdm':
		include('controllers/admin/controllers_espace_admin.php');
    break;
    		
	case 'connexion':
		include('controllers/admin/controllers_cnxAdm.php');
    break;
	
	case 'index':
		include('controllers/admin/controllers_index.php');
    break;
    	
	case 'dcnxAdmin'://controleur de connexion au site
		include('controllers/admin/controllers_dcx.php');
	break;
	
	case 'messages'://controleur de connexion au site
		include('controllers/admin/controllers_messages.php');
	break;
	
	case 'images'://controleur de connexion au site
		include('controllers/admin/controllers_images.php');
	break;
	
	case 'videos'://controleur de connexion au site
		include('controllers/admin/controllers_videos.php');
	break;
		
	case 'ajout_videos'://controleur de connexion au site
		include('controllers/admin/controllers_ajout_videos.php');
	break;
	
	case 'inscriptions'://controleur de connexion au site
		include('controllers/admin/controllers_inscription.php');
	break;

	case 'modifImg'://controleur de connexion au site
		include('controllers/admin/controllers_modifImg.php');
	break;








	


	// Client
	case 'acceuil':
		include('controllers/controllers_acceuil.php');
    break;
    	
	case 'apropos':
		include('controllers/controllers_apropos.php');
    break;
    	
	case 'formations':
		include('controllers/controllers_formations.php');
    break;
	
	case 'contact':
		include('controllers/controllers_contact.php');
    break;
    	
	case 'inscription':
		include('controllers/controllers_inscription.php');
    break;
    	
	case 'forum':
		include('controllers/controllers_forum.php');
    break;
    	
	case 'galerie':
		include('controllers/controllers_galerie.php');
    break;
    	
	case 'reglement':
		include('controllers/controllers_reglement.php');
    break;
    	
	case 'tarif':
		include('controllers/controllers_tarif.php');
    break;
    


	case 'dcnx'://controleur de connexion au site
		include('controllers/controllers_dcx.php');
	break;
//=========================================================================		
	default: //affichage de la page d'accueil par défaut
		include('controllers/controllers_acceuil.php');
	break;
}

?>


