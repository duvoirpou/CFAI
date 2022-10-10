<?php
session_start();
include('connexionBdd/connexionBdd.php');
$db = connexionBdd();
if (isset($_POST['action'])) {



	$nom_user = htmlentities(trim($_POST['nom_user']));
	$prenom_user = htmlentities(trim($_POST['prenom_user']));
	$sexe = htmlentities(trim($_POST['sexe']));
	$tel = htmlentities(trim($_POST['tel']));
	$pseudo	= htmlentities(trim($_POST['pseudo']));
	$mpass = htmlentities(trim($_POST['mpass']));
	$permis	 = htmlentities(trim($_POST['permis']));


	$request = $db->prepare("SELECT * FROM `user` WHERE pseudo=:pseudo");
	$result = $request->execute(array(
		':pseudo' => $pseudo
	));

	$result = $request->fetchobject();



	//vérification pour s'avoir si l'objet existe
	if (!is_object($result)) {

		$req = $db->prepare("INSERT INTO `user`(`nom_user`, `prenom_user`, `sexe`, `tel`, `pseudo`, `mpass`, `permis`) VALUES ('$nom_user','$prenom_user','$sexe','$tel','$pseudo','$mpass','$permis')");
		$req->execute();

		echo "
		<script language='JavaScript'>
		Swal.fire({
			icon: 'success',
			text: 'Compte créé avec succès !'
		});
		$('#formulaire')[0].reset();
		</script>
		";
	} else {

		/* echo "
		<script language='JavaScript'>
		document.getElementById('#action_alert').innerHTML = 'echec d enregistrement';
		</script>
		"; */
		echo  '
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Erreur !</strong> Ce pseudo existe déjà, veuillez le changer svp !
		</div>
		';
	}
}
