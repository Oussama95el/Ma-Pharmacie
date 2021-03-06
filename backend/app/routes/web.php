<?php


use App\Controller\AdminController;
use App\Controller\CategoryController;
use App\Controller\ClientController;
use App\Controller\LivreurController;
use App\Controller\ProductController;
use App\router\Route;

//admin routes
Route::post('/admin/login' , [AdminController::class, "auth"]);
Route::post('/admin/addLivreur' , [AdminController::class, "addLivreur"]);

//client routes
Route::post("/client/register", [ClientController::class, "register"]);
Route::post('/client/login' , [ClientController::class, "auth"]);



//livreur routes
Route::post('/livreur/login',[LivreurController::class,"auth"]);
//Category routes
Route::post('/category/add', [CategoryController::class,"addCategory"]);
Route::post('/category/update',[CategoryController::class,"updateCategory"]);
Route::get('/categories',[CategoryController::class,"geAllCategories"]);
//Product routes
Route::post('/product/add',[ProductController::class,"addProduct"]);
Route::get('/products',[ProductController::class,"getAllProducts"]);
