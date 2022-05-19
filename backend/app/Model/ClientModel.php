<?php

namespace App\Model;


class ClientModel
{

    static public function addClient($data)
    {
        $connect = DatabaseModel::connect();
        $db = $connect->prepare('INSERT INTO client ( fname, email, password) 
                                                    values (:fname, :email, :password)');

        return $db->execute($data);
    }
}