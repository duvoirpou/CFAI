<?php
//session_start();
include('connexion.php');

if(isset($_POST['enregistrer']))    {


    $noms = $_POST['noms'];
    $prenoms = $_POST['prenoms'];
    $tel = $_POST['telephone'];
    $message = $_POST['message'];
    
    $request = $db->prepare("INSERT INTO `contact`(`noms`, `prenoms`, `telephone`, `message`)
    VALUES (:noms,:prenoms,:telephone,:message)");

$reponse = $request->execute(array(
    ':noms' => $noms,
    ':prenoms' => $prenoms,
    ':telephone' => $tel,
    ':message' => $message
)   
    );
     
    };
    header('location:contact.php');
