<?php


use App\Controller\AdminController;
use App\Controller\CategoryController;
use App\Controller\ClientController;
use App\router\Route;

//client routes
Route::post("/client/register", [ClientController::class, "register"]);
Route::post('/client/login' , [ClientController::class, "auth"]);

//admin routes
Route::post('/admin/add' , [AdminController::class, "add"]);

//livreur routes

//Category routes
Route::post('/category/add', [CategoryController::class,"addCategory"]);
Route::put('/category/update',[CategoryController::class,"updateCategory"]);
//Product routes
