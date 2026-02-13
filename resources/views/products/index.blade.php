@extends('layouts.app')

@section('content')
<h1>Liste des produits</h1>

<p><a href="{{ route('products.create') }}">Créer un produit</a></p>

@forelse($products as $product)
<div>
    #{{ $product->id }} — {{ $product->name }} — {{ $product->price }}<br>
    <small>{{ $product->description }}</small>
    <a href="{{ route('products.edit', $product) }}">Éditer</a>
</div>

@empty
<p>Aucun produit pour le moment.</p>
@endforelse
@endsection