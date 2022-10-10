<?php
session_start();
include('connexionBdd/connexionBdd.php');
$db = connexionBdd();
if (isset($_POST['publier'])) {
    if (!empty($_POST['commentaire']) && !empty($_POST['id_user'])) {

        $commentaire = htmlentities(trim($_POST['commentaire']));
        $id_user = htmlentities(trim($_POST['id_user']));
        $annee_commentaire = htmlentities(trim($_POST['annee_commentaire']));
        $heure_commentaire = htmlentities(trim($_POST['heure_commentaire']));
        $minute_commentaire    = htmlentities(trim($_POST['minute_commentaire']));
        $date_commentaire = htmlentities(trim($_POST['date_commentaire']));


        $req = $db->prepare("INSERT INTO commentaires (commentaire, id_user, annee_commentaire, heure_commentaire, minute_commentaire, date_commentaire) VALUES (:commentaire,:id_user,:annee_commentaire,:heure_commentaire,:minute_commentaire,:date_commentaire)");
        $req->execute(array(
            'commentaire' => $commentaire,
            'id_user' => $id_user,
            'annee_commentaire' => $annee_commentaire,
            'heure_commentaire' => $heure_commentaire,
            'minute_commentaire' => $minute_commentaire,
            'date_commentaire' => $date_commentaire

        ));

        header('location:forum.php');

        // echo  'echec d\'enregistrement';


    } else {
        echo "
			<script language='JavaScript'>
			alert('Veuillez saisir quelque chose !');
			document.location.replace('forum.php');
			</script>
				";
    }
}
