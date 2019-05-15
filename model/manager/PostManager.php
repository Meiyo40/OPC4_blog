<?php
namespace manager;

use services\Database;
use services\Helper;
use entity\Post;

class PostManager{

    public function getPosts(){
        $db = Database::connect();
        $statement = $db->prepare('SELECT id, title, author, content, nb_comments, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin\') AS date, img_key, img_ext FROM opc_blog_posts ORDER BY date DESC LIMIT 0, 5');
        
        $statement->execute();
        $req = $statement->fetchAll(); 
        Database::disconnect();
        return $req;        
        
    }

    public function getLastPosts(){
        //display last 5 posted article on blog
        
        $db = Database::connect();
        $statement = $db->prepare('SELECT*FROM opc_blog_posts ORDER BY (date) DESC LIMIT 5');

        $statement->execute();
        $posts = $statement->fetchAll();
        
        Database::disconnect();
        
        return $posts;
    }

    public function getPost($postId){
        $db = Database::connect();
        $req = $db->prepare('
        SELECT * 
        FROM opc_blog_posts
        WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        Database::disconnect();
        return $post; 
    }

    public function addPost($title, $content, $author, $img_name){

        $pattern = '/(gif|png|jpeg|jpg)$/i';
        $extension = pathinfo($img_name, PATHINFO_EXTENSION);
        $extension = preg_match($pattern, $extension);

        if($_FILES['image']['size'] < 10485760 && $extension){
            $post = new Post();
            $author = Helper::validateContent($author);
            $content = Helper::validateContent($content);
            $title = Helper::validateContent($title);
            $post->setTitle($title);
            $post->setContent($content);
            $post->setAuthor($author);
            $post->setDate(date("Y-m-d H:i:s"));

            $post->setImg($img_name);            
            $post->addPost();
        }
        else{
            if(!$extension){
                $extension = 'Extension de fichier : '.$extension.'<br>';
                file_put_contents('debug.html', $extension, FILE_APPEND);
            }
            elseif($_FILES['image']['size'] > 4194304){
                $file_size = 'Taille du fichier trop importante <br>';
                file_put_contents('debug.html', $file_size, FILE_APPEND);
            }
            return false;
        }
        
    }

    public function editPost($id, $newContent, $newTitle, $newAuthor){
        $post = new Post();

        $author = Helper::validateContent($newAuthor);
        $content = Helper::validateContent($newContent);
        $title = Helper::validateContent($newTitle);

        $post->setId($id);
        $post->setTitle($title);
        $post->setContent($content);
        $post->setAuthor($author);
        $post->setDate(date("Y-m-d H:i:s"));
        
        $post->editPost();
    }

    public function deletePost($id){
        $post = new Post();

        $post->setId($id);

        $post->deletePost();
    }

}