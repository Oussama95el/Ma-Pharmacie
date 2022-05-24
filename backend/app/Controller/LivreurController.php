<?php

namespace App\Controller;

use App\router\Request;

class LivreurController
{
    public function auth()
    {
        $livreur = Request::getBody();

    }
}