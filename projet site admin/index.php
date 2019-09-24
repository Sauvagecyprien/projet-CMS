<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>site d'actu</title>
</head>

<body>

    <div id="wrapper">
        <div id="header">

            <!-- le haut de page-->

            <div id="header_top">
                <div id="logo">
                    <h1>actu RSMA-R</h1>
                </div>
                <div id="cari">
                    <form>
                        <input type="text" name="cari" placeholder="rechercher..." class="champdecriture" style="border :none">
                        <input type="submit" value="Go" class="boutonhaut">
                    </form>
                </div>

            </div>
            <div id="header_center">
                <div id="menu_wrapper">
                    <ul id="menu">
                        <li><a href="#content_center">articles</a></li>
                        <li><a href="#footer">contact</a></li>
                        <li><a href="#content_center">Actualités</a></li>
                        <li><a href="#content_bottom">Sport</a></li>
                        <li><a href="login.html">login</a></li>
                    </ul>
                </div>
            </div>






            <div id="header_bottom">
                <div id="slider">
                    <img src="image/peinture.jpg" alt="suce ma bite" title="j'en ai pas" width="100%">
                </div>
            </div>
        </div>





        <!-- la legende en bas de l'image-->

        <div id="content">
            <div id="content_top">
                <h4>présentation courte du site internet </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga deleniti aspernatur ipsam illum 
                magni, porro quaerat suscipit maxime eos incidunt error quod quae adipisci commodi. Suscipit optio 
                nisi mollitia magnam. Lorem ipsum dolor sit amet consectetur adipisicing elit. In, cumque error. Rem
                 nisi architecto assumenda minus rerum eveniet, quas ad voluptate distinctio, eius consequatur labore 
                 totam ullam deleniti obcaecati fugiat.</p>
            </div>


            <!-- les contents bootstrapp fait maison -->


        
           
            <div id="content_center">
            <h1 style="text-align:center">Actualités</h1>
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
            $reponse = $bdd->query("SELECT * FROM articles WHERE categorie='actualité'");
            
            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>


            
                <div class="cc_news image" id="<?php echo $donnees['id']; ?>" name="id_article" style="height: 450px">
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
<div id="content_bottom">
<h1 style="text-align:center">Sport</h1>
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
            $reponse2 = $bdd->query("SELECT * FROM articles WHERE categorie='sport'");
            
            // On affiche chaque entrée une à une
            while ($donnees2 = $reponse2->fetch())
            {
            ?>


            
                <div class="cc_news image" id="<?php echo $donnees2['id']; ?>" name="id_article" style="height: 450px">
                    <h4 style="margin-left: 20px"><?php echo $donnees2['titre']; ?></h4>
                    <p style="margin-left: 20px">publié le : <?php echo $donnees2['date_publication']; ?>,<br>écrit par : <?php echo $donnees2['auteur']; ?></p>
                    <img src="<?php echo $donnees2['images']; ?>" alt="" style="height:195px; width:260px; margin-left: 20px">
                    <p style="margin-left: 20px"><?php echo $donnees2['description_courte']; ?>...</p>
                    <a href="article.php?iD=<?php echo $donnees2['id']?>" style="margin-left: 20px">Voir +</a>
                </div>


               
          
                <?php
            }
            
            $reponse2->closeCursor(); // Termine le traitement de la requête
            
            ?>

        </div>
            <div id="content_bottom">
                <div class="cb_news">
                    <h4>je sais pas quoi mettre ici mais bon c'est jolie !</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor reprehenderit illum officia qui
                        quas asperiores cumque fuga error praesentium incidunt tempore optio vero, accusantium aliquid,
                        facere aut necessitatibus nemo reiciendis.</p>
                    <a href="#">Voir +</a>
                </div>

                <div class="cb_news">
                    <h4>je sais pas quoi mettre ici mais bon c'est jolie !</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor reprehenderit illum officia qui
                        quas asperiores cumque fuga error praesentium incidunt tempore optio vero, accusantium aliquid,
                        facere aut necessitatibus nemo reiciendis.</p>
                    <a href="#">Voir +</a>
                </div>

            </div>
        </div>
        
        <!-- le footer avec la messagerie les informations ect...-->

        <div id="footer">
            <div>
                <h1 style="text-align: center; margin-bottom: 70px">NOUS CONTACTER</h1>
                <div style="float: left">
                    <form action="" method="post">
                        <div> 
                            <label for="name">Nom :</label>
                            <input type="text" id="name" name="user_name" class="champdecriture">
                        </div>
                        <div>
                            <label for="mail">e-mail :</label>
                            <input type="email" id="mail" name="user_mail" class="champdecriture">
                        </div>
                        <div>
                            <label for="msg">Message :</label>
                            <textarea id="msg" name="user_message" class="champdecriture"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Envoyer le message</button>
                        </div>
                    </form>
                </div>

                <div style="float: right">
                    <h1>COORDONNÉES</h1>
                    <p>Quartier SUACOT - 97448 St-Pierre Cedex, <br> Saint-Pierre 97410, La Réunion</p>

                    <p>cyprien.sauvage974@gmail.com</p>
                    <p>romain.morel@gmail.com</p>
                </div>
            </div>

        </div>

        <!-- la petite baniere noire-->

        <div class="footer-end">
            <p>
                <font color="#57b6cc"> copyright</font> &copy;2019
                product by morel & sauvage
            </p>
        </div>

    </div>
</body>

</html>