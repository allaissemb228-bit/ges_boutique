<h1>Nouvelle commande</h1>

<form action="{{ route('commandes.store') }}" method="POST">
    @csrf

    <label>Client</label>

    <select name="client_id">
        @foreach($clients as $client)
            <option value="{{ $client->id }}">
                {{ $client->nom }} {{ $client->prenom }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Produit</label>

    <select name="produit_id">
        @foreach($produits as $produit)
            <option value="{{ $produit->id }}">
                {{ $produit->designation }}
            </option>
        @endforeach
    </select>

    <br><br>

    <input type="number"
           name="quantite"
           min="1"
           placeholder="Quantité">

    <br><br>

    <button type="submit">
        Enregistrer
    </button>

</form>