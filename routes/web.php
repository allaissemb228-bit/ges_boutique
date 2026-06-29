<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\DashboardController;

Route::resource('clients', ClientController::class);
Route::resource('produits', ProduitController::class);
Route::resource('commandes', CommandeController::class);
Route::get('/facture/{commande}', [FactureController::class, 'generer'])
    ->name('facture.generer');
Route::get('/', [DashboardController::class, 'index']);