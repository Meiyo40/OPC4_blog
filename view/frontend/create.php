<?php 
    $title = "Page d'administration";
    $script = "";
    $headContent = "<link href='./assets/css/adminpanel.css' rel='stylesheet' type='text/css'>";
?>
<?php ob_start(); ?>
<h1 class="center"> Panneau d'administration </h1>
    
    <div id="admin-options">
        <a href="edit.php"><button>Modifier un article</button></a>
        <a href="create.php"><button>Créer nouvel article</button></a>
        <a href="users.php"><button>Gestion des utilisateurs</button></a>
    </div>
    
    <div id='addPost'>

        <form id="new-article-form" action="index.php?action=create&addPost=true" method="POST">
            <label for="article-title">Titre de l'article</label>
            <input id="article-title" type="text" name='title' required>
            <label>Image</label>
            <input name="image">
            <select name="author">
            <?php 
                for($i = 0; $i < sizeof($usersList); $i++){
                    echo "<option value='".$usersList[$i]['name']."'>".$usersList[$i]['name']."</option>";
                }
            ?>
            <option value="test">test</option>
            </select>
            <textarea form="new-article-form" name='content'></textarea>
            <input type="submit" value="Poster l'article">
        </form>
            
            
        </p>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require(__DIR__.'/../template.php'); ?>