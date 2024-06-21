<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer un produit</title>
</head>
<body>
    <h1>Éditer un produit</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nom:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea><br>
        <label for="price">Prix:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" step="0.01" required><br>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>