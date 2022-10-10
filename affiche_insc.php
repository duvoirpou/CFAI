<?php
        // Start the session
        session_start();
        include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();


$request = $_REQUEST;

$col = array(
    0 =>'id_app',
    1 =>'nom',
    2 =>'prenom',
    3 =>'date_naiss',
    4 =>'lieu_naiss',
    5 =>'sexe',
    6 =>'adresse',
    7 =>'cni',
    8 =>'email',
    9 =>'tel',
    10 =>'date_insc',
    11 =>'nom_pere',
    12 =>'prenom_pere',
    13 =>'adresse_pere',
    14 =>'ville_pere',
    15 =>'tel_pere',
    16 =>'nom_mere',
    17 =>'prenom_mere',
    18 =>'adresse_mere',
    19 =>'ville_mere',
    20 =>'tel_mere',
    21 =>'formation',
    22 =>'etat',

); // créer les colonnes comme dans la base de données

$sql ="SELECT apprenants.id_app, apprenants.nom, apprenants.prenom, DATE_FORMAT(apprenants.date_naiss, '%d/%m/%Y') AS date_fr, apprenants.lieu_naiss, apprenants.sexe, apprenants.adresse, apprenants.cni, apprenants.email, apprenants.tel, DATE_FORMAT(apprenants.date_insc, '%d/%m/%Y') AS date_insc_fr, apprenants.nom_pere, apprenants.prenom_pere, apprenants.adresse_pere, apprenants.ville_pere, apprenants.tel_pere, apprenants.nom_mere, apprenants.prenom_mere, apprenants.adresse_mere, apprenants.ville_mere, apprenants.tel_mere, apprenants.formation, apprenants.etat FROM apprenants ";
$req = $db->prepare($sql);
$req->execute();
$totalData=$req->rowcount();

$totalFilter = $totalData;

$sql ="SELECT apprenants.id_app, apprenants.nom, apprenants.prenom, DATE_FORMAT(apprenants.date_naiss, '%d/%m/%Y') AS date_fr, apprenants.lieu_naiss, apprenants.sexe, apprenants.adresse, apprenants.cni, apprenants.email, apprenants.tel, DATE_FORMAT(apprenants.date_insc, '%d/%m/%Y') AS date_insc_fr, apprenants.nom_pere, apprenants.prenom_pere, apprenants.adresse_pere, apprenants.ville_pere, apprenants.tel_pere, apprenants.nom_mere, apprenants.prenom_mere, apprenants.adresse_mere, apprenants.ville_mere, apprenants.tel_mere, apprenants.formation, apprenants.etat FROM apprenants ";
if(!empty($request['search']['value'])){
    $sql.=" HAVING  ( apprenants.id_app LIKE '".$request['search']['value']."%' ";
    $sql.=" OR apprenants.nom LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.prenom LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  date_fr LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.lieu_naiss LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.sexe LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.adresse LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.cni LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.email LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.tel LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  date_insc_fr LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.nom_pere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.prenom_pere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.adresse_pere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.ville_pere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.tel_pere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.nom_mere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.prenom_mere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.adresse_mere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.ville_mere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.tel_mere LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.formation LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  apprenants.etat LIKE '".$request['search']['value']."%' ) ";



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
    $subdata[]=$row[1].' '.$row[2];
    // $subdata[]=$row[2];
    $subdata[]=$row[3].' '.$row[4];
    // $subdata[]=$row[4];
    $subdata[]=$row[5];
    $subdata[]=$row[6];
    $subdata[]=$row[7];
    $subdata[]=$row[8];
    $subdata[]=$row[9];
    // $subdata[]=$row[10];
    // $subdata[]=$row[11].' '.$row[12];

    // $subdata[]=$row[12];

    // $subdata[]=$row[13];
    // $subdata[]=$row[14];
    // $subdata[]=$row[15];
    // $subdata[]=$row[16].' '.$row[17];

    // $subdata[]=$row[17];

    // $subdata[]=$row[18];
    // $subdata[]=$row[19];
    // $subdata[]=$row[20];
    $subdata[]=$row[21];
    $subdata[]=$row[22];


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