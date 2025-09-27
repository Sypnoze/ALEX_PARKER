<?php

namespace App\Controllers\PagesController;

use App\Models\PostsModel;
use \PDO;


function indexAction(PDO $conn)
{
    // Je vais demander des donées aux modèles

    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($conn);



    // Je charge la vue 'home' dans $content

    global $content, $title;

    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}


function showAction(\PDO $conn, int $id)
{
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($conn, $id);

    global $content, $title;
    $title = $post['id'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}
