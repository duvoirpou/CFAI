<?php 
// include('connexionBdd/connexionBdd.php');
$bdd = connexionBdd();


$temps_session = 15;
$temps_actuel = date("U");
$user_ip = $_SERVER['REMOTE_ADDR'];

$req_ip_exist = $bdd->prepare('SELECT * FROM online WHERE user_ip= ? ');
$req_ip_exist->execute(array($user_ip));
$ip_existe = $req_ip_exist->rowCount();

if($ip_existe == 0) {
  $add_ip = $bdd->prepare('INSERT INTO online(time,user_ip) VALUES(?,?)');
  $add_ip->execute(array($temps_actuel,$user_ip));
} else{
  $update_ip = $bdd->prepare('UPDATE online SET time = ? WHERE user_ip = ?');
  $update_ip->execute(array($temps_actuel,$user_ip));

}

$session_delete_time = $temps_actuel - $temps_session;

$del_ip = $bdd->prepare('DELETE FROM online WHERE time < ?');
$del_ip->execute(array($session_delete_time));

$show_user_nbr = $bdd->query('SELECT * FROM online');
$user_nbr = $show_user_nbr->rowCount();



function nbr_visites(){
    $bdd = connexionBdd();


    //recupere l'ip de l'utilisateur
    $ip = $_SERVER['REMOTE_ADDR'];

    //ne pas repeter la meme addresse ip dans la table visite
    $req_ip_exist = $bdd->prepare('SELECT * FROM visite WHERE user_ip= ? ');
    $req_ip_exist->execute(array($ip));
    $ip_existe = $req_ip_exist->rowCount();

    if($ip_existe == 0) {
      $query = $bdd->query("INSERT INTO visite(user_ip) VALUES('$ip') ");
    }

    //recuperer et compter le nbre de visites
    $select = $bdd->query("SELECT * FROM `visite` WHERE 1 ");
    GLOBAL $users;
    $users = $select->rowCount();
    
    
}
?>