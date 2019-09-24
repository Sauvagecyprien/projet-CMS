


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylelogin.css">
    <title>modif</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "cyprien";
$password = "Brother97.4";
$dbname = "siteactu";
$Id = $_GET['id'];



// Create connection
$conn = new PDO("mysql:host=localhost;dbname=siteactu", 'cyprien', 'Brother97.4',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// Check connection


$reponse = $conn->query("SELECT * FROM articles WHERE id=$Id");
session_start();
?>

<?php   while($row = $reponse->fetch()) {
    ?>
 <div id="wrapper">
        <form action="success.php" method="GET">
            <div class="imgcontainer">
                <img src="<?php echo $_SESSION['img']; ?>" alt="Avatar" class="avatar" style="width: 50%; height:50%">
            </div>

            <h1 style="text-align: center"><?php echo $_SESSION['pseudo']; ?> est connecté</h1>

            <div class="container">

           <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >

                <label for=""><b>titre</b></label>
            <input type="text" name="titre" class="champdecriture" value="<?php echo $row['titre']; ?>">

                    <label for=""><b>catégorie</b></label>
                    <input type="text" name="categorie" class="champdecriture" value="<?php echo $row['categorie']; ?>">

                <label for=""><b>lien image</b></label>
                <input type="text" name="images" class="champdecriture" value="<?php echo $row['images']; ?>">

                <label for=""><b>date de publication</b></label>
                <input type="text" name="date_publication" class="champdecriture" value="<?php echo $row['date_publication']; ?>">

                <label for=""><b>auteur</b></label>
                <input type="text" name="auteur" class="champdecriture" value="<?php echo $row['auteur']; ?>">

                <label for=""><b>paragraphe</b></label>
                <textarea type="text" name="paragraphe" class="champdecriture"><?php echo $row['paragraphe']; ?></textarea>




                <button type="submit" name="modif">Modifier les informations</button>

            </div>
        </form>
        <div class="container" style="background-color:#f1f1f1">
        <a href="disconnect.php"><button type="button" class="cancelbtn">Se déconnecter</button></a>
        </div>

    </div>
    <?php
}
?>
</body>

</html>
