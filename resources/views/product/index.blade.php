@foreach ($products as $product)
    {{ $product->Libelle }} - {{ $product->Marque }} - {{ $product->Prix }} - {{ $product->Stock }}<br>
@endforeach
