<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [ProductController::class , 'homePage'])->name('home');

Route::post('/' , [ProductController::class , 'addProduit'])->name('route-add-home');

Route::get('allproduit' , [ProductController::class , 'allProduit'])->name('route-all-liste');

Route::get('editproduit/{id}' , [ProductController::class , 'editProduit'])->name('route-edit-liste');



Route::put('updateproduit/{id}' , [ProductController::class , 'updateProduit'])->name('route-update-liste');

Route::delete('deleteproduit{id}' , [ProductController::class , 'deleteProduit'])->name('route-delete-produit');

