<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ShopLaravel</title>
</head>
<body>
    <nav>
        <a href="{{ route('welcome') }}">Accueil</a> | 
        <a href="{{ route('about') }}">À propos</a>
    </nav>

    <hr>

    @yield('content')

    <hr>
    <footer>
        <p>Copyright © {{ date('Y') }} - ShopLaravel</p>
    </footer>
</body>
</html>