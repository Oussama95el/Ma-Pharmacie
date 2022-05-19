<?php

namespace App\Controller;


use App\Model\ClientModel;
use App\router\Request;

class ClientController
{
    public function register()
    {
        $data = Request::getBody();
        $hashed = password_hash($data['password'], PASSWORD_ARGON2I);
        $newData = array(
            'email' => $data['email'],
            'fname' => $data['fname'],
//            'tel' => '23424143',
            'password' => $hashed
        );
        $result = ClientModel::addClient($newData);
        if ($result) {
            echo json_encode($result);
        }
    }

}