<?php

namespace App\Controller;

use App\router\Request;
use App\router\Route;

class TesterController
{
    public function __invoke()
    {
        Route::json(["message" => "3la slamtna", "id" => Request::get("id"), ...$_GET]);
    }
}