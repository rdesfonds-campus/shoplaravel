@extends('layouts.app')

@section('title', 'À propos')

@section('content')
    <h1>À propos</h1>

    @if($estOuvert)
        <p>La boutique est actuellement ouverte !</p>
    @else
        <p>La boutique est fermée, revenez plus tard.</p>
    @endif

    <p>Le responsable est : {{ $responsable }}</p>
@endsection
