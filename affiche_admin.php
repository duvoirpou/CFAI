<?php
        // Start the session
        session_start();
        include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();


$request = $_REQUEST;

$col = array(
    0 =>'id',
    1 =>'nom',
    2 =>'prenom',
    3 =>'login',
    4 =>'password',
    5 =>'etat',

); // créer les colonnes comme dans la base de données

$sql ="SELECT * FROM `admin` ";
$req = $db->prepare($sql);
$req->execute();
$totalData=$req->rowcount();

$totalFilter = $totalData;

$sql ="SELECT * FROM `admin` ";
if(!empty($request['search']['value'])){
    $sql.=" HAVING  ( admin.id LIKE '".$request['search']['value']."%' ";
    $sql.=" OR admin.nom LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  admin.prenom LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  admin.login LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  admin.password LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  admin.etat LIKE '".$request['search']['value']."%' ) ";



}

$req = $db->prepare($sql);
$req->execute();
$totalData=$req->rowcount();

// ordre trie

// $sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".$request['start']."  ,".$request['length']."  ";
$req = $db->prepare($sql);
$req->execute();

$data = array();

while($row=$req->fetch()){

    $subdata = array();
    $subdata[]=$row[0];
    $subdata[]=$row[1];
    $subdata[]=$row[2];
    $subdata[]=$row[3];
    // $subdata[]=$row[4];



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