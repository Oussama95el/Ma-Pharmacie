<?php

namespace App\Model;

abstract class CategoryModel
{
    static public function addCat($data)
    {
        $connect = DatabaseModel::connect();
        $db = $connect->prepare('INSERT INTO categorie ( nom) 
                                                    values (:nom)');
        return $db->execute($data);
    }
    static public function updateCat($data)
    {
        $connect = DatabaseModel::connect();
        $db = $connect->prepare('UPDATE categorie SET (nom) 
                                                    values (:nom) WHERE id = :id ');
        return $db->execute($data);
    }
    abstract public static function addProduct($data);
    abstract public static function getProduct();
    abstract public static function updateProduct();
    abstract public static function deleteProduct();
}