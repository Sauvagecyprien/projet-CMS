<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="article.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="margin-left:25%; margin-bottom:5%;"><img src="image\cooltext332453168005399.png" alt="" ></div>
<?php
    $ID = $_GET['iD'];
    $servername = "localhost";
    $dbname = "siteactu";



    $conn = new PDO("mysql:host=$servername;dbname=$dbname", 'cyprien', 'Brother97.4',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id=$ID");
    $resultat = $stmt -> fetch();
?>
<div style="width:100%">
    <div class="body_art">

        <div class="title">
            <h1><?php echo $resultat['titre'] ?></h1>
        </div>

        <div class="image">
            <img src="<?php echo $resultat['images'] ?>" alt="" style="height:50%; width:50%; border-radius:50px">
        </div>

        <div class="texte">
            <p><?php echo $resultat['paragraphe'] ?></p>
        </div>
        <hr class="hr">
        <div class="auteur">
            <h5> Posté par <br><?php echo $resultat ['auteur'] ?></h5>
            <h5><?php echo $resultat ['date_publication'] ?></h5>
        </div>
        <hr class="hr">

        <div class="retour">
            <a href="index.php"><button type="button">Revenir au site</button></a>
        </div>
    

    </div>

    

    <div id="content_center">
    <?php
            try
            {
                // On se connecte à MySQL
                $bdd = new PDO('mysql:host=localhost;dbname=siteactu;charset=utf8', 'cyprien', 'Brother97.4');
            }
            catch(Exception $e)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }
            
            // Si tout va bien, on peut continuer
            
            // On récupère tout le contenu de la table utilisateur
            $reponse = $bdd->query("SELECT * FROM articles");
            
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
            
            
            <div class="cc_news picture" id="<?php echo $donnees['id']; ?>" name="id_article" style="height: 450px">
                    <h4 style="margin-left: 20px"><?php echo $donnees['titre']; ?></h4>
                    <p style="margin-left: 20px">publié le : <?php echo $donnees['date_publication']; ?>,<br>écrit par : <?php echo $donnees['auteur']; ?></p>
                    <img src="<?php echo $donnees['images']; ?>" alt="" style="height:195px; width:260px; margin-left: 20px">
                    <p style="margin-left: 20px"><?php echo $donnees['description_courte']; ?>...</p>
                    <a href="article.php?iD=<?php echo $donnees['id']?>" style="margin-left: 20px">Voir +</a>
                </div>


               
          
                <?php
            }
            
            //$reponse->closeCursor(); // Termine le traitement de la requête
            
            ?>  
            
    </div>
    </div>
    <div class="footer-end">
            <p>
                <font color="#57b6cc"> copyright</font> &copy;2019
                product by morel & sauvage
            </p>
        </div>
</body>
</html>