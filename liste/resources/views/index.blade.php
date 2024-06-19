<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->name }}><br>
                Description: {{ $product->description }}<br>
                Prix: {{ $product->price }}<br>
            </li>
        @endforeach
    </ul>
</body>
</html>