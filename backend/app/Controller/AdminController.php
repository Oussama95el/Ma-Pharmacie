<?php

namespace App\Controller;

use App\Model\AdminModel;
use App\Model\ClientModel;
use App\router\Request;

class AdminController
{
    use PersonLogin;

    public function auth()
    {
        $admin = Request::getBody();
        $this->checkCredentiels(AdminModel::checkAdmin($admin),$admin);
    }

    public function addLivreur()
    {
        $data = Request::getBody();
        $newData = array(
            'email' => $data['email'],
            'fname' => $data['fname'],
            'password' => password_hash($data['password'], PASSWORD_ARGON2I)
        );
        $result = AdminModel::addLivreur($newData);
        if ($result) {
            echo json_encode($result);
        }
    }
}