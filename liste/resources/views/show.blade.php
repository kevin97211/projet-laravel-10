<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du produit</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>Description: {{ $product->description }}</p>
    <p>Prix: {{ $product->price }}</p>
    <a href="{{ route('products.index') }}">Retour à la liste</a>
</body>
</html>