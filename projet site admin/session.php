<?php
$pseudo = $_GET['pseudo'];
$pass = $_GET['mdp'];
$dbname = 'siteactu';
$servername = 'localhost';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", 'cyprien', 'Brother97.4');
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id, pseudo, email, mdp, urlimage, roles FROM utilisateur WHERE pseudo='$pseudo'");
    $stmt->execute();
    $resultat = $stmt->fetch();

        
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($pass, $resultat['mdp']);


    if (!$resultat) {
        echo 'Mauvais identifiant ou mot de passe';
    } 
    else 
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['img'] = $resultat['urlimage'];
            $_SESSION['rol'] = $resultat['roles'];
           header ('location: interface-admin.php');


        } else {
            echo "Mauvais identifiant ou mot de passe";
            echo "<br>";
            echo "<a href=\"login.html\"><button type=\"button\">Réessayer</button></a>";
            //echo $pass;
            
        }
    }

}catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}
?>