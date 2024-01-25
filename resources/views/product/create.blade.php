<form action="{{ route('products.store') }}" method="post">
    @csrf
    <label for="Libelle">Libelle:</label>
    <input type="text" name="Libelle" required>
    <label for="Marque">Marque:</label>
    <input type="text" name="Marque" required>
    <label for="Prix">Prix:</label>
    <input type="number" name="Prix" step="0.01" required>
    <label for="Stock">Stock:</label>
    <input type="number" name="Stock" required>
    <label for="Image">Image:</label>
    <input type="file" name="Image">
    <button type="submit">Créer le produit</button>
</form>
