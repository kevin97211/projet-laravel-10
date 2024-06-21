<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <a href="{{ route('products.create') }}">Ajouter un produit</a>
    <ul>
        @foreach($produits as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                Description: {{ $product->description }}<br>
                Prix: {{ $product->price }} €<br>
                <a href="{{ route('products.show', $product->id) }}">Voir</a>
                <a href="{{ route('products.edit', $product->id) }}">Éditer</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>