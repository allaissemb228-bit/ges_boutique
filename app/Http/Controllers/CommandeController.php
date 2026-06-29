<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::with('client')->get();

        return view('commandes.index', compact('commandes'));
    }

    public function create()
    {
        $clients = Client::all();
        $produits = Produit::all();

        return view('commandes.create', compact('clients', 'produits'));
    }public function store(Request $request)
{
    $produit = Produit::findOrFail($request->produit_id);

    $montant = $produit->prix_unitaire * $request->quantite;

    $commande = Commande::create([
        'client_id' => $request->client_id,
        'date_commande' => now(),
        'montant_total' => $montant
    ]);

    $commande->produits()->attach(
        $produit->id,
        [
            'quantite' => $request->quantite,
            'prix_unitaire' => $produit->prix_unitaire
        ]
    );
    $produit->stock -= $request->quantite;
$produit->save();

    return redirect()->route('commandes.index');
}
public function show(Commande $commande)
{
    $commande->load('client', 'produits');

    return view('commandes.show', compact('commande'));
}
}