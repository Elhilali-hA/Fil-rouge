<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\admin;
use App\Http\Controllers\Admin\Categorie;
use App\Http\Controllers\Admin\Fournisseur;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\adminController;

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

// Route::get('/admin/login', [App\Http\Controllers\Admin\LoginAdmin::class, 'index'])->name('login'); 

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() { 
    
    Route::get('/dashboard', [App\Http\Controllers\Admin\adminController::class, 'index'])->name('dashboard'); 
    Route::get('/produit/ajout', [App\Http\Controllers\Admin\ProduitController::class, 'create'])->name('ajout.produit');
    Route::post('/produit/store', [App\Http\Controllers\Admin\ProduitController::class, 'store'])->name('produit.store');
    
    // categorie
    Route::get('/categories', [App\Http\Controllers\Admin\Categorie::class, 'index'])->name('categories');
    Route::get('/categorie/ajout', [App\Http\Controllers\Admin\Categorie::class, 'create'])->name('categorie.ajout');
    Route::post('/categorie/store', [App\Http\Controllers\Admin\Categorie::class, 'store'])->name('categorie.store');
    Route::post('/categorie/update/{id}', [App\Http\Controllers\Admin\Categorie::class, 'update'])->name('categorie.update');
    Route::get('/categorie/editer/{id}', [App\Http\Controllers\Admin\Categorie::class, 'edit'])->name('categorie.editer');
    Route::get('/categorie/delete/{id}', [App\Http\Controllers\Admin\Categorie::class, 'destroy'])->name('categorie.delete');
    
    // fournisseur
    Route::get('/fournisseur', [App\Http\Controllers\Admin\Fournisseur::class, 'index'])->name('fournisseur');
    Route::get('/fournisseur/ajout', [App\Http\Controllers\Admin\Fournisseur::class, 'create'])->name('fournisseur.ajout');
    Route::post('/fournisseur/store', [App\Http\Controllers\Admin\Fournisseur::class, 'store'])->name('fournisseur.store');
    Route::post('/fournisseur/update/{id}', [App\Http\Controllers\Admin\Fournisseur::class, 'update'])->name('fournisseur.update');
    Route::get('/fournisseur/edit/{id}', [App\Http\Controllers\Admin\Fournisseur::class, 'edit'])->name('fournisseur.edit');
    Route::get('/fournisseur/delete/{id}', [App\Http\Controllers\Admin\Fournisseur::class, 'destroy'])->name('fournisseur.delete');
    
    // stock
    Route::get('/stock', [App\Http\Controllers\Admin\stock::class, 'index'])->name('stock');
    Route::get('/stock/creer', [App\Http\Controllers\Admin\stock::class, 'create'])->name('stock.creer');
    Route::post('/stock/store', [App\Http\Controllers\Admin\stock::class, 'store'])->name('stock.store');
    Route::post('/stock/update/{id}', [App\Http\Controllers\Admin\stock::class, 'update'])->name('stock.update');
    Route::get('/stock/edit/{id}', [App\Http\Controllers\Admin\stock::class, 'edit'])->name('stock.edit');
    Route::get('/stock/delete/{id}', [App\Http\Controllers\Admin\stock::class, 'destroy'])->name('stock.delete');
});

Route::group(['prefix' => 'employe',  'middleware' => 'auth'], function(){ 
    Route::get('/dashboard', [App\Http\Controllers\Employe\EmployeController::class, 'index'])->name('employe');
 
});

// Route::group(['prefix' => 'client',  'middleware' => 'auth'], function(){ 
   
 
// });