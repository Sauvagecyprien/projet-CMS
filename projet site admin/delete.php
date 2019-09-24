<?php
$bdd = new PDO('mysql:host=localhost;dbname=siteactu;charset=utf8', 'cyprien', 'Brother97.4');
$Id = $_GET['id'];
$bdd -> exec("DELETE FROM articles WHERE id=$Id");
header('location: tableadmin.php');
?>