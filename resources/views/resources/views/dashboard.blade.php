@extends('layouts.app')

@section('content')

<h1>Tableau de bord</h1>

<p>Clients : {{ $nbClients }}</p>
<p>Produits : {{ $nbProduits }}</p>
<p>Commandes : {{ $nbCommandes }}</p>
<p>Chiffre d'affaires : {{ $chiffreAffaire }} FCFA</p>

@endsection