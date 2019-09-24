<?php
$Img = $_POST['images'];
$Nart = $_POST['titre'];
$Ctg = $_POST['ctg'];
$text = $_POST['paragraphe'];
$servername = 'localhost';
$dbname = 'siteactu';
$resumer = substr ( $text, 0 , 100);
session_start();
$nom = $_SESSION['pseudo'];




$char = chr(92);
$text = str_replace("'",$char."'",$text);
$Nart = str_replace("'",$char.'"',$Nart);
header('Content-Type: charset=utf-8');

$conn = new PDO("mysql:host=$servername;dbname=$dbname", 'cyprien', 'Brother97.4',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $req = "INSERT INTO articles(id , titre , images , paragraphe , description_courte , date_publication , auteur , statut, categorie) 
VALUES (null ,'$Nart' , '$Img','$text' , '$resumer' , CURDATE() , '$nom' ,'En cours' ,'$Ctg');";

$conn -> exec($req);

header('location: interface-admin.php');


?>
