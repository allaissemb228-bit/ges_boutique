@extends('layouts.app')

@section('content')

<h1>Commandes</h1>

<a href="{{ route('commandes.create') }}"
class="btn btn-primary mb-3">
Nouvelle commande
</a>

<table class="table table-bordered">

<tr>
<th>N°</th>
<th>Client</th>
<th>Date</th>
<th>Total</th>
<th>Actions</th>
</tr>

@foreach($commandes as $commande)

<tr>

<td>{{ $commande->id }}</td>

<td>
{{ $commande->client->nom }}
</td>

<td>
{{ $commande->date_commande }}
</td>

<td>
{{ $commande->montant_total }}
FCFA
</td>

<td>

<a href="{{ route('commandes.show',$commande->id) }}"
class="btn btn-info">
Voir
</a>

<a href="{{ route('facture.generer',$commande->id) }}"
class="btn btn-success">
PDF
</a>

</td>

</tr>

@endforeach

</table>

@endsection