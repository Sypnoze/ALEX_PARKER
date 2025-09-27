<?php

namespace App\Models\PostsModel;

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

function findOneById(\PDO $conn, int $id): array
{
    $sql = "SELECT p.*, c.name AS category_name
            FROM posts p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE p.id = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
