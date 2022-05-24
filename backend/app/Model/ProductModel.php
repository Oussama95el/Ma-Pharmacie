<?php

namespace App\Model;

class ProductModel extends CategoryModel
{
    static public function addProduct($data)
    {
        $connect = DatabaseModel::connect();
        $db = $connect->prepare('INSERT INTO client, categorie ( client.Ref, client.name, client.marque, client.image, client.description, client.prix_achat, client.prix_vente, client.date_ajout_produit) 
                                                    values (:Ref, :name, :marque, :image, :description, :prix_achat, :prix_vente, :date_ajout_produit)');

        return $db->execute($data);
    }

    public static function getProduct()
    {
        // TODO: Implement getProduct() method.
    }

    public static function updateProduct()
    {
        // TODO: Implement updateProduct() method.
    }

    public static function deleteProduct()
    {
        // TODO: Implement deleteProduct() method.
    }
}