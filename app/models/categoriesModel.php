<?php


namespace App\Models\CategoriesModel;


use \PDO;


function findAll(PDO $conn): array
{
    $sql = "SELECT id, name AS category_name
            FROM categories
            ORDER BY name ASC;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
