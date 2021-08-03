<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Categorie;
use App\Http\Controllers\ProduitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logout', function(){
    Auth::logout();

    return view('welcome');
}); 

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() { 
    Route::get('/dashboard', [App\Http\Controllers\adminController::class, 'index'])->name('dashboard'); 
    Route::get('/fournisseur/ajout', [App\Http\Controllers\PostsController::class, 'create'])->name('ajout.fournisseur');
    Route::get('/produit/ajout', [App\Http\Controllers\ProduitController::class, 'create'])->name('ajout.produit');
    Route::post('/produit/store', [App\Http\Controllers\ProduitController::class, 'store'])->name('produit.store');
    Route::get('/categories', [App\Http\Controllers\Categorie::class, 'index'])->name('categories');
    Route::get('/categorie/ajout', [App\Http\Controllers\Categorie::class, 'create'])->name('categorie.ajout');
    Route::post('/categorie/store', [App\Http\Controllers\Categorie::class, 'store'])->name('categorie.store');
});
