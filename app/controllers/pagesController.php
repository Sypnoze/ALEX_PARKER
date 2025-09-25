<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $conn)
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
