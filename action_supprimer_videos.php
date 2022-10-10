<?php
include('connexionBdd/connexionBdd.php');
    //connexion à la bdd





if(isset($_POST['id_conf'])){



    $id_conf = $_POST['id_conf'];


    $bdd = connexionBdd();

    $request=$bdd->prepare("DELETE FROM videos WHERE id_video=? ");
    $request->execute(array($id_conf));

echo '<h4>Supprimé avec succès</h4>';

}









