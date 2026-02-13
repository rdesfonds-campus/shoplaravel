<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ShopLaravel</title>
</head>
<body>
    <nav>
        <a href="{{ route('products.index') }}">Produits</a>
        <a href="{{ route('welcome') }}">Accueil</a>
        <a href="{{ route('about') }}">À propos</a>
    </nav>

    <hr>

    @if(session('success'))
        <div style="background:#dcfce7; color:#166534; padding:10px; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="background:#fee2e2; color:#991b1b; padding:10px; margin-bottom:10px;">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

    <hr>

    <footer>
        <p>Copyright {{ date('Y') }} - ShopLaravel</p>
    </footer>
</body>
</html>
