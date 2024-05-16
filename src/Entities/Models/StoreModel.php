<?php
class StoreModel
{
    public static function getProducts(PDO $db): array
    {
        $query = $db->prepare('SELECT `image`, `title`, `price`, `category`, `character`, `id` FROM `products`');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Product::class);
        return $query->fetchALL();
    }
    public static function getProductsById($id, PDO $db)
    {
        $query = $db->prepare('SELECT `image`, `title`, `price`, `character`, `description` FROM `products` WHERE `id` = :id');
        $query->execute([':id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, Product::class);
        return $query->fetch();
    }
}
