<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylelogin.css">
    <title>interface admin</title>



</head>

<body style="background-color: rgb(233, 225, 225)">

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
            $reponse = $bdd->query('SELECT * FROM utilisateur WHERE ');
            ?>

    <div id="wrapper">
        <form action="InsertArtS.php" method="POST">
            <div class="imgcontainer">
                <img src="<?php echo $_SESSION['img']; ?>" alt="Avatar" class="avatar" style="width: 50%; height:50%">
            </div>

            <h1 style="text-align: center"><?php echo $_SESSION['pseudo']; ?> est connecté</h1>

            <div class="container">

                <label for=""><b>titre</b></label>
                <input type="text" placeholder="Entrer le titre de l'article..." name="titre" required
                    class="champdecriture">

                    <label for=""><b>catégorie</b></label>
                <input type="text" placeholder="Entrer le titre de l'article..." name="ctg" required
                    class="champdecriture">


                <label for=""><b>lien image</b></label>
                <input type="text" placeholder="Entrer votre lien d'image ici..." name="images" required
                    class="champdecriture">

                <label for=""><b>paragraphe</b></label>
                <textarea id="msg" name="paragraphe" class="champdecriture"></textarea>




                <button type="submit">Publier</button>

            </div>
        </form>
        <div class="container" style="background-color:#f1f1f1">
        <a href="disconnect.php"><button type="button" class="cancelbtn">Se déconnecter</button></a>
        <a href="tableadmin.php"><button type="button" class="cancelbtn" style="float: right">Gérer les publications</button></a>
        </div>

    </div>


</body>

</html>