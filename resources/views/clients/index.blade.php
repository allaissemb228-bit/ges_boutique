@extends('layouts.app')

@section('content')

<h1>Clients</h1>

<a href="{{ route('clients.create') }}"
class="btn btn-primary mb-3">
Ajouter
</a>

<table class="table table-bordered">

<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
<th>Email</th>
<th>Actions</th>
</tr>

@foreach($clients as $client)

<tr>
<td>{{ $client->nom }}</td>
<td>{{ $client->prenom }}</td>
<td>{{ $client->telephone }}</td>
<td>{{ $client->email }}</td>

<td>

<a href="{{ route('clients.edit',$client->id) }}"
class="btn btn-warning">
Modifier
</a>

<form action="{{ route('clients.destroy',$client->id) }}"
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