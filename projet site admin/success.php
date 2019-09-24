<?php

$servername = "localhost";
$username = "cyprien";
$password = "Brother97.4";
$dbname = "siteactu";
$Id = $_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
$update = $_GET['modif'];
$titre = $_GET['titre'];
$paragraphe = $_GET['paragraphe'];
$categorie = $_GET['categorie'];
$date_publication = $_GET['date_publication'];
$auteur = $_GET['auteur'];
$images = $_GET['images'];



$conn -> query("UPDATE articles SET titre='$titre' , images='$images', paragraphe='$paragraphe' , categorie='$categorie' , date_publication='$date_publication' , auteur='$auteur' WHERE id=$Id");
header('location: tableadmin.php');
?>