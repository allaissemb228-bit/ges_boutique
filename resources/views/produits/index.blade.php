@extends('layouts.app')

@section('content')

<h1>Produits</h1>

<a href="{{ route('produits.create') }}"
class="btn btn-primary mb-3">
Ajouter
</a>

<table class="table table-bordered">

<tr>
<th>Référence</th>
<th>Désignation</th>
<th>Prix</th>
<th>Stock</th>
<th>Actions</th>
</tr>

@foreach($produits as $produit)

<tr>
<td>{{ $produit->reference }}</td>
<td>{{ $produit->designation }}</td>
<td>{{ $produit->prix_unitaire }}</td>
<td>{{ $produit->stock }}</td>

<td>

<a href="{{ route('produits.edit',$produit->id) }}"
class="btn btn-warning">
Modifier
</a>

<form action="{{ route('produits.destroy',$produit->id) }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger">
Supprimer
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection