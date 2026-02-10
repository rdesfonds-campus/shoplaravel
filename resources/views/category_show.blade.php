<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catégorie : {{ $category->name }}</title>
</head>
<body>
    <a href="/categories">← Retour à toutes les catégories</a>

    <h1>Équipements : {{ $category->name }}</h1>

    @if($products->isEmpty())
        <p>Aucun gadget n'est disponible dans cette section pour le moment.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Nom de l'objet</th>
                    <th>Description</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }} €</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>