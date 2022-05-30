<?php

namespace App\Controller;

use App\Model\ProductModel;
use App\router\Request;
use App\router\Route;
use mysql_xdevapi\Result;

class ProductController
{
    public static function addProduct()
    {
        $data = Request::getBody();
        $newData = array(
            'name' => $data['name'],
            'marque' => $data['marque'],
            'description' => $data['description'],
            'image' => $data['image'],
            'prix_achat' => $data['prix_achat'],
            'prix_vente' => $data['prix_vente'],
            'categorie' => '2',
            'date_ajout_produit' => date("Y-m-d"),
        );
        return ProductModel::addProduct($newData);
    }
    // function get all products and parse return to json
    public static function getAllProducts()
    {
        $data = ProductModel::getProducts();
        if ($data !== []){
            return Route::json($data);
        }else echo 'No data';
    }
    // function get product by id and parse return to json
    public static function getProductById($id)
    {
        $data = ProductModel::getProductById($id);
        if ($data !== []){
            return Route::json($data);
        }else echo 'No data';
    }
    public static function updateProduct()
    {
        $data = Request::getBody();
        $newData = array(
            'name' => $data['name'],
            'marque' => $data['marque'],
            'description' => $data['description'],
            'image' => $data['image'],
            'prix_achat' => $data['prix_achat'],
            'prix_vente' => $data['prix_vente'],
            'categorie' => $data['categorie'],
        );
        return ProductModel::updateProduct($newData);
    }


}