<?php
$nom = $_GET['pseudo'];
$email = $_GET['email'];
$mdp = $_GET['mdp'];
$cmdp = $_GET['cmdp'];
$image = $_GET['images'];
$servername = 'localhost';
$dbname = 'siteactu';
$pass_hache = password_hash($mdp , PASSWORD_DEFAULT);

$conn = new PDO("mysql:host=$servername;dbname=$dbname", 'cyprien', 'Brother97.4');
$req = "INSERT INTO utilisateur (id , pseudo , email , mdp , urlimage , roles) VALUES (null,'$nom','$email','$pass_hache', '$image' , 'visiteur');";

if ($mdp == $cmdp) {
    $conn->exec($req);

    header('location: login.html');
    
            
} else {
    echo "les mot de passe ne correspondent pas";
    echo "<a href=\"creationlogin.php\"><button type button> Réessayer</button></a>";
}
?>             


        
