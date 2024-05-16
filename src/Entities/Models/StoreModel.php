<?php

class StoreModel
{

    public static function getProducts(PDO $db): array
    {
        $query = $db->prepare('SELECT `image`, `title`, `price`, `category`, `character` FROM `products`');

        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, Product::class);

        return $query->fetchALL();

    }

//    public static function getProductsByCatId(int $id, PDO $db): array
//    {
//        $query = $db->prepare('SELECT `image`, `title`, `price`, `category`, `character` FROM `products` WHERE `id` = :id');
//
//        $query->execute([':id' => $id]);
//
//        $query->setFetchMode(PDO::FETCH_CLASS, Product::class);
//
//        return $query->fetchALL();
//    }



}