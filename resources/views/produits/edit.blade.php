<h1>Modifier un produit</h1>

<form action="{{ route('produits.update', $produit->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text"
           name="reference"
           value="{{ $produit->reference }}">

    <br><br>

    <input type="text"
           name="designation"
           value="{{ $produit->designation }}">

    <br><br>

    <input type="number"
           step="0.01"
           name="prix_unitaire"
           value="{{ $produit->prix_unitaire }}">

    <br><br>

    <input type="number"
           name="stock"
           value="{{ $produit->stock }}">

    <br><br>

    <textarea name="description">{{ $produit->description }}</textarea>

    <br><br>

    <button type="submit">
        Mettre à jour
    </button>
</form>