<h1>FACTURE N° {{ $commande->id }}</h1>

<p>
Client :
{{ $commande->client->nom }}
{{ $commande->client->prenom }}
</p>

<table border="1" width="100%">

<tr>
<th>Produit</th>
<th>Qté</th>
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

<h2>
Total :
{{ $commande->montant_total }}
FCFA
</h2>