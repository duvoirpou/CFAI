<?php
include('models/classe_user.php');

if (isset($_POST['valider'])) {
	//var_dump($_POST);exit;

	if (!empty($_POST['login']) and !empty($_POST['mdp'])) {

		$login = htmlentities(trim($_POST['login']));
		$mdp = htmlentities(trim($_POST['mdp']));


		$cnxUser = new User(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

		$reponse = $cnxUser->connexionSiteUser($login, $mdp);

		if ($reponse) {
			//ajout des sessions
			$_SESSION['id_user'] = $reponse->id_user;
			$_SESSION['nom_user'] = $reponse->nom_user;
			$_SESSION['prenom_user'] = $reponse->prenom_user;
			$_SESSION['pseudo']	= $reponse->pseudo;
			$_SESSION['mpass'] = $reponse->mpass;
			$_SESSION['tel'] = $reponse->tel;

			echo "
			<script language='JavaScript'>
			alert('Connexion réussie !');
			document.location.replace('forum.php');
			</script>
				";
			// header('location:?c=forum');
		} else {
			echo "
			<script language='JavaScript'>
			alert('Pseudo ou mot de passe incorrect !');
			document.location.replace('index.php?c=forum');
			</script>
				";
			// header('location:?c=forum');
		}
	} else {
		echo "
		<script language='JavaScript'>
		alert('Remplissez le formulaire svp ! ');
		document.location.replace('index.php?c=forum');
		</script>
			";
		// header('location:?c=forum');
	}
}






if (isset($_POST['enregistrer'])) {
	if (!empty($_POST['nom_user']) and !empty($_POST['prenom_user']) and !empty($_POST['tel']) and !empty($_POST['pseudo']) and !empty($_POST['mpass']) and !empty($_POST['confirm']) and !empty($_POST['permis'])) {
		if ($_POST['mpass'] == $_POST['confirm']) {


			$nom_user	 = htmlentities(trim($_POST['nom_user']));
			$prenom_user	 = htmlentities(trim($_POST['prenom_user']));
			$sexe	 = htmlentities(trim($_POST['sexe']));
			$tel	 = htmlentities(trim($_POST['tel']));
			$pseudo	 = htmlentities(trim($_POST['pseudo']));
			$mpass	 = htmlentities(trim($_POST['mpass']));
			$permis	 = htmlentities(trim($_POST['permis']));


			$Ins_users = new User(NULL, $nom_user, $prenom_user, $sexe, $tel, $pseudo, $mpass, $permis);

			$reponse = $Ins_users->ajoutClient();


			if ($reponse) {
				header('location:?c');
			} else {
				header('location:?c=forum');
			}
		} else {
			echo "<script language='JavaScript'>
			alert('Mauvaise confirmation de mot de passe, veuillez réessayer svp !');
			document.location.replace('?c=forum');
			</script>";
		}
	}
}



include('views/forum.php');
