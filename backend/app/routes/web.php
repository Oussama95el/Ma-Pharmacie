<?php


use App\Controller\ClientController;
use App\Controller\TesterController;
use App\router\Route;

Route::get("/test/", TesterController::class);
Route::post("/client/register", [ClientController::class, "register"]);
