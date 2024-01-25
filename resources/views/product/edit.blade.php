<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="Libelle">Libelle:</label>
    <input type="text" name="Libelle" value="{{ $product->Libelle }}" required>
    <label for="Marque">Marque:</label>
    <input type="text" name="Marque" value="{{ $product->Marque }}" required>
    <label for="Prix">Prix:</label>
    <input type="number" name="Prix" value="{{ $product->Prix }}" step="0.01" required>
    <label for="Stock">Stock:</label>
    <input type="number" name="Stock" value="{{ $product->Stock }}" required>
    <label for="Image">Image:</label>
    <input type="file" name="Image">
    <button type="submit">Mettre à jour le produit</button>
</form>
