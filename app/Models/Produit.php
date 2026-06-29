<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;

class Produit extends Model
{
    protected $fillable = [
        'reference',
        'designation',
        'prix_unitaire',
        'stock',
        'description'
    ];

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commande_produit')
    ->withPivot('quantite', 'prix_unitaire');
    }
}