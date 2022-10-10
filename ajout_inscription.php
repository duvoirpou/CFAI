<?php 
session_start();
include('connexionBdd/connexionBdd.php');
$db = connexionBdd();
  if(isset($_POST['action'])){

  
        $nom = htmlentities(trim(strip_tags($_POST['nom'])));
        $prenom = htmlentities(trim(strip_tags($_POST['prenom'])));
        $date_naiss = htmlentities(trim(strip_tags($_POST['date_naiss'])));
        $lieu_naiss = htmlentities(trim(strip_tags($_POST['lieu_naiss'])));
        $sexe = htmlentities(trim(strip_tags($_POST['sexe'])));
        $adresse = htmlentities(trim(strip_tags($_POST['adresse'])));
        $cni = htmlentities(trim(strip_tags($_POST['cni'])));
        $email = htmlentities(trim(strip_tags($_POST['email'])));
        $tel = htmlentities(trim(strip_tags($_POST['tel'])));

        $nom_pere = htmlentities(trim(strip_tags($_POST['nom_pere'])));
        $prenom_pere = htmlentities(trim(strip_tags($_POST['prenom_pere'])));
        $adresse_pere = htmlentities(trim(strip_tags($_POST['adresse_pere'])));
        $ville_pere = htmlentities(trim(strip_tags($_POST['ville_pere'])));
        $tel_pere = htmlentities(trim(strip_tags($_POST['tel_pere'])));
        $nom_mere = htmlentities(trim(strip_tags($_POST['nom_mere'])));
        $prenom_mere = htmlentities(trim(strip_tags($_POST['prenom_mere'])));
        $adresse_mere = htmlentities(trim(strip_tags($_POST['adresse_mere'])));
        $ville_mere = htmlentities(trim(strip_tags($_POST['ville_mere'])));
        $tel_mere = htmlentities(trim(strip_tags($_POST['tel_mere'])));
        $formation = htmlentities(trim(strip_tags($_POST['formation'])));
        $etat = htmlentities(trim(strip_tags($_POST['etat'])));
       

        $req = $db->prepare("INSERT INTO `apprenants`(`nom`, `prenom`, `date_naiss`, `lieu_naiss`, `sexe`, `adresse`, `cni`, `email`, `tel`, `date_insc`, `nom_pere`, `prenom_pere`, `adresse_pere`, `ville_pere`, `tel_pere`, `nom_mere`, `prenom_mere`, `adresse_mere`, `ville_mere`, `tel_mere`, `formation`, `etat`) VALUES ('$nom', '$prenom', '$date_naiss', '$lieu_naiss', '$sexe', '$adresse', '$cni', '$email','$tel', CURRENT_DATE(), '$nom_pere', '$prenom_pere', '$adresse_pere', '$ville_pere', '$tel_pere', '$nom_mere', '$prenom_mere', '$adresse_mere', '$ville_mere', '$tel_mere', '$formation', '$etat')");

        if($req->execute()){

           echo  "<script>
           $('#contact')[0].reset();
                    
                    Swal.fire({
                        icon: 'success',
                        text: 'Client enrégistré avec succès !'
                    })
           </script>"; 
        }
        else
        {
             echo  'echec d\'enregistrement';  
        }
  
	}  
?>