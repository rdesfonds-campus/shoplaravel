@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Bienvenue sur {{ $nom }} !</h1>

    <p>Nombre de produits : {{ $nbProduits }}</p>

    @if($estOuvert)
        <p>La boutique est actuellement ouverte.</p>
    @else
        <p>La boutique est fermée, revenez plus tard.</p>
    @endif
@endsection