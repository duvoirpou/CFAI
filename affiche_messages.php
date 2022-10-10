<?php
        // Start the session
        session_start();
        include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();


$request = $_REQUEST;

$col = array(
    0 =>'id_contact',
    1 =>'identite',
    2 =>'tel',
    3 =>'msg',
    4 =>'date_message',
    5 =>'mois_message',
    6 =>'annee_message',
    7 =>'heure_message',
    8 =>'statut',

); // créer les colonnes comme dans la base de données

$sql ="SELECT contact.id_contact,contact.identite, contact.tel, contact.msg, DATE_FORMAT(contact.date_message, '%d/%m/%Y') AS date_fr, contact.mois_message, contact.annee_message, contact.heure_message, contact.statut FROM contact ";
$req = $db->prepare($sql);
$req->execute();
$totalData=$req->rowcount();

$totalFilter = $totalData;

$sql ="SELECT contact.id_contact,contact.identite, contact.tel, contact.msg, DATE_FORMAT(contact.date_message, '%d/%m/%Y') AS date_fr, contact.mois_message, contact.annee_message, contact.heure_message, contact.statut FROM contact ";
if(!empty($request['search']['value'])){
    $sql.=" HAVING  ( contact.id_contact LIKE '".$request['search']['value']."%' ";
    $sql.=" OR contact.identite LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  contact.tel LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  date_fr LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  contact.mois_message LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  contact.annee_message LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  contact.heure_message LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  contact.statut LIKE '".$request['search']['value']."%' ) ";



}

$req = $db->prepare($sql);
$req->execute();
$totalData=$req->rowcount();

// ordre trie

$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".$request['start']."  ,".$request['length']."  ";
$req = $db->prepare($sql);
$req->execute();

$data = array();

while($row=$req->fetch()){

    $subdata = array();
    $subdata[]=$row[0];
    $subdata[]=$row[1];
    $subdata[]=$row[2];
    $subdata[]=$row[3];
    $subdata[]=$row[4];
    $subdata[]=$row[5];
    $subdata[]=$row[6];


$subdata[]=$row[7];
if($row[8]=='Nouveau message'){$subdata[]='<p class="bg-success text-center">Nouveau message</p>';}else{$subdata[]='<p class="bg-danger text-center">Lu</p>';}
// $subdata[]=$row[8];

             $subdata[]='<button class="btn btn-primary btn-lg editer" id="'.$row[0].'" title="modifier"><i class="fa fa-edit"></i> </button> &nbsp;
             ';




    $data[]=$subdata;
}

$json_data = array(
    "draw" => intval($request['draw']),
    "recordsTotal" => intval($totalData),
    "recordsFiltered" => intval($totalFilter),
    "data" => $data

);

echo json_encode($json_data);


?>