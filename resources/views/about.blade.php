@extends('layouts.base')


@if($estOuvert)
    <p style="color: green;">La boutique est actuellement ouverte ! ✅</p>
@else
    <p style="color: red;">La boutique est fermée, revenez plus tard. ❌</p>
@endif
@section('content')
    <h1>À propos de la boutique</h1>
    <p>Le responsable est : {{ $responsable }}</p>

    <h3>Nos catégories :</h3>
    <ul>
        @foreach($categories as $categorie)
            <li>{{ $categorie }}</li>
        @endforeach

    </ul>
@endsection

<ul>
    @foreach($categories as $categorie)
        <li>
            @if($loop->first)
                <strong>{{ $categorie }} (Nouveauté !)</strong>
            @else
                {{ $categorie }}
            @endif
        </li>
    @endforeach
</ul>