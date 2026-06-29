<h1>Ajouter un client</h1>

<form action="{{ route('clients.store') }}" method="POST">
    @csrf

    <input type="text" name="nom" placeholder="Nom"><br><br>

    <input type="text" name="prenom" placeholder="Prénom"><br><br>

    <input type="text" name="telephone" placeholder="Téléphone"><br><br>

    <input type="text" name="adresse" placeholder="Adresse"><br><br>

    <input type="email" name="email" placeholder="Email"><br><br>

    <button type="submit">
        Enregistrer
    </button>
</form>