<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Barryvdh\DomPDF\Facade\Pdf;

class FactureController extends Controller
{
    public function generer(Commande $commande)
    {
        $commande->load('client', 'produits');

        $pdf = Pdf::loadView('factures.facture', compact('commande'));

        return $pdf->download('facture-'.$commande->id.'.pdf');
    }
}