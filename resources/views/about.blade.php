<h1>À propos de la boutique</h1>
<p>Le responsable est : {{ $responsable }}</p>

<h3>Nos catégories :</h3>
<ul>
    @foreach($categories as $categorie)
        <li>{{ $categorie }}</li>
    @endforeach
</ul>