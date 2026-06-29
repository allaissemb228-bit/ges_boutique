<h1>Détails de la commande</h1>

<p>
    Client :
    {{ $commande->client->nom }}
    {{ $commande->client->prenom }}
</p>

<p>
    Date :
    {{ $commande->date_commande }}
</p>

<p>
    Total :
    {{ $commande->montant_total }} FCFA
</p>

<table border="1">
    <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Prix</th>
    </tr>

    @foreach($commande->produits as $produit)
    <tr>
        <td>{{ $produit->designation }}</td>
        <td>{{ $produit->pivot->quantite }}</td>
        <td>{{ $produit->pivot->prix_unitaire }}</td>
    </tr>
    @endforeach
</table>