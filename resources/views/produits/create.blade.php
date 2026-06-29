<h1>Ajouter un produit</h1>

<form action="{{ route('produits.store') }}" method="POST">
    @csrf

    <input type="text" name="reference" placeholder="Référence"><br><br>

    <input type="text" name="designation" placeholder="Désignation"><br><br>

    <input type="number" step="0.01" name="prix_unitaire" placeholder="Prix"><br><br>

    <input type="number" name="stock" placeholder="Stock"><br><br>

    <textarea name="description" placeholder="Description"></textarea><br><br>

    <button type="submit">
        Enregistrer
    </button>
</form>