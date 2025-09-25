<?php

namespace APP\Models\PostsModel;

use \PDO;

function findAll(PDO $conn): array
{
    $sql = "SELECT posts.*, categories.name AS category_name
            FROM posts
            JOIN categories ON posts.category_id = categories.id
            ORDER BY posts.created_at DESC
            LIMIT 10";

    return $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
