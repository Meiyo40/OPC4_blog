<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Blog projet openclassroom numéro 4">
        <meta name="author" content="Meiyo">
        <link rel="icon" href="assets/image/icon.jpg">
        <title>
            <?= $title ?>
        </title>
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Place your stylesheet here-->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <?= $headContent ?>
        <link href="assets/css/custom/skin.min.css">
    </head>
        
    <body>

        <?= $content ?>

        <div id="admin-btn">
            <a href="index.php?action=login"><button class="btn btn-info">Administration</button></a>
            <a href="index.php" ><button class="btn btn-info">Accueil</button></a>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="node_modules/tinymce/tinymce.min.js"></script>
        <script src="assets/js/main.js"></script>
        <?= $script ?>
        
    </body>
        
    <footer>        
        <p>
            Site développé par LDM pour le 4e projet du parcours développeur web junior d'Openclassrooms
        </p>
        <a href="#">Politique de confidentialité</a>
    </footer>
</html>