<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Document</title>
</head>
<body>
<style>
th, td {
    height: 60px;
}
</style>
<?php 

session_start();
if(empty($_SESSION['rol'])){
    $rol="visiteur";
    }else{
        $rol= $_SESSION['rol'];
    }
    if(empty($rol)||$rol=="visiteur"){
        header('Location: 403.html');
    }


$bdd = new PDO("mysql:host=localhost;dbname=siteactu", 'cyprien', 'Brother97.4',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$reponse = $bdd->query('SELECT * FROM articles');



?>
<div style="display:flex; justify-content: center; margin-top: 5%">
<table border style="text-align:center; width: 80% ">
<thead>
    <th>Id</th>
    <th>Titre</th>
    <th>Catégorie</th>
    <th>date de publication</th>
    <th>Auteur</th>
    <th id="vt">modifier</th>
    <th>Supprimer</th>

</thead>
<?php 
    while($donnees = $reponse->fetch()) 
    {


    ?>

<tbody>
    <tr>
        <td><?php echo $donnees['id']; ?></td>
        <td><?php echo $donnees['titre']; ?></td>
        <td><?php echo $donnees['categorie']; ?></td>
        <td><?php echo $donnees['date_publication']; ?></td>
        <td><?php echo $donnees['auteur']; ?></td>
        <td id="vb"><a href="modif.php?id=<?php echo $donnees['id']?>"><button>modifier</button></a></td>
        <td><a href="delete.php?id=<?php echo $donnees['id']?>"><button>Supprimer</button></a></td>
    </tr>
</tbody>

<?php
}
?>
</table>
</div>
<a href="disconnect.php"><button type="button" class="cancelbtn" style="margin-left:30%; margin-top:2%">Se déconnecter</button></a>
<a href="interface-admin.php"><button type="button" class="cancelbtn" style="margin-left:25%">revenir a la publication</button></a>
    
</body>
</html>