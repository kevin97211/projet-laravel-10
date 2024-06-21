<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un produit</title>
</head>
<body>
    <h1>Créer un produit</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Nom:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea><br>
        <label for="price">Prix:</label>
        <input type="number" name="price" id="price"  required><br>
        <button type="submit">Créer</button>
    </form>
</body>
</html>