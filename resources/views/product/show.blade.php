{{--detailprdt--}}
{{ $product->Libelle }} - {{ $product->Marque }} - {{ $product->Prix }} - {{ $product->Stock }}<br>
<!-- Btn modif et supp -->
<a href="{{ route('products.edit', $product->id) }}">Modifier</a>
<form action="{{ route('products.destroy', $product->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
