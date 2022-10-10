<?php
        // Start the session
        session_start();
        include('connexionBdd/connexionBdd.php');
        $db = connexionBdd();


$request = $_REQUEST;

$col = array(
    0 =>'id_img',
    1 =>'photo',
    2 =>'libelle',
    3 =>'date_fr',
    4 =>'heure_ajout',
    5 =>'type_img',
); // créer les colonnes comme dans la base de données

$sql ="SELECT images.id_img, images.photo, images.libelle, DATE_FORMAT(images.date_ajout, '%d/%m/%Y') AS date_fr, images.heure_ajout, images.type_img FROM images ";
$req = $db->prepare($sql);
$req->execute();
$totalData=$req->rowcount();

$totalFilter = $totalData;

$sql ="SELECT images.id_img, images.photo, images.libelle, DATE_FORMAT(images.date_ajout, '%d/%m/%Y') AS date_fr, images.heure_ajout, images.type_img FROM images ";
if(!empty($request['search']['value'])){
    $sql.=" HAVING  ( images.id_img LIKE '".$request['search']['value']."%' ";
    $sql.=" OR images.photo LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  images.libelle LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  date_fr LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  images.heure_ajout LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  images.type_img LIKE '".$request['search']['value']."%' ) ";



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
    $subdata[]='<img src="images/'.$row[1].'" style="width:120px;height:120px;" />';
    $subdata[]=$row[2];
    $subdata[]=$row[3];
    $subdata[]=$row[4];
    $subdata[]=$row[5];



             $subdata[]='<!--<button class="btn btn-primary btn-lg editer" id="'.$row[0].'" title="modifier"><i class="fa fa-edit"></i> </button>--> &nbsp;
             
             <button  class="btn btn-danger btn-lg suppr" id="'.$row[0].'" type="submit" style=""><i class="fa fa-remove"></i> </button>
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