<?php 
session_start();
include('connexionBdd/connexionBdd.php');
$db = connexionBdd();
  if(isset($_POST['action'])){

        $identite = htmlentities(trim(strip_tags($_POST['identite'])));
        $tel = htmlentities(trim(strip_tags($_POST['tel'])));
        $msg = htmlentities(trim(strip_tags($_POST['msg'])));
        $mois_message = htmlentities(trim(strip_tags($_POST['mois_message'])));
        $annee_message = htmlentities(trim(strip_tags($_POST['annee_message'])));
        $heure_message = htmlentities(trim(strip_tags($_POST['heure_message'])));
       

        $req = $db->prepare("INSERT INTO `contact`(`identite`, `tel`, `msg`, `date_message`, `mois_message`, `annee_message`, `heure_message`) VALUES ('$identite', '$tel', '$msg', CURRENT_DATE(), '$mois_message', '$annee_message', '$heure_message')");

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