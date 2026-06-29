<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produit;
use App\Models\Commande;

class DashboardController extends Controller
{
    public function index()
    {
        $nbClients = Client::count();
        $nbProduits = Produit::count();
        $nbCommandes = Commande::count();

        $chiffreAffaire = Commande::sum('montant_total');

        return view('dashboard', compact(
            'nbClients',
            'nbProduits',
            'nbCommandes',
            'chiffreAffaire'
        ));
    }
    
}