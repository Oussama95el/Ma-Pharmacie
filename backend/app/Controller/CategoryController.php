<?php

namespace App\Controller;

use App\Model\CategoryModel;
use App\router\Request;

class CategoryController
{
    public static function addCategory()
    {
        $data = Request::getBody();
        $result = CategoryModel::addCat($data);
        var_dump($result);
        if ($result) {
            echo json_encode($result);
        }
    }

    public static function updateCategory()
    {
        $data = Request::getBody();
        $result = CategoryModel::updateCat($data);
        if ($result){
            echo "successfully updated ";
        }else{
            echo "error";
        }
    }
}