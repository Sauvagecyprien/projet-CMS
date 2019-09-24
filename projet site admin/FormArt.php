<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="FormBody col-12">
    <div class="FormArt">
        <form action="InsertArtS.php" method="GET">
        <div class="NomArt row">
            
            <div>
                <h6>Nom de l'article</h6>
                <input type="text" name="Nom">
            </div> <br>
            <div>
                <h6>Categorie</h6>
                <input type="text" name="ctg">
            </div>
        </div>
        <div class="TextArt"> <br>
            <h6>Texte Article</h6>
         
            <textarea name="Tart" id="" cols="40" rows="10"></textarea>
        
        </div>
        <div> <br>
            <h6>Lien de l'image</h6>
            <input type="text" name="lienImg">
        </div>
     <br>
        <button type="submit" name="publier" value="pub">Valider</button>
    </div>
</form>
       
</div>

</body>
</html>