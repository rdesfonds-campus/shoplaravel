@extends('layouts.app')

@section('content')
    <h1>Modifier le produit</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nom</label>
            <input id="name" type="text" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
        </div>

        <div>
            <label for="price">Prix</label>
            <input id="price" type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required>
        </div>

        <div>
            <label for="stock">Stock</label>
            <input id="stock" type="number" name="stock" value="{{ old('stock', $product->stock) }}" required>
        </div>

        <div>
            <label for="active">Actif</label>
            <input id="active" type="checkbox" name="active" value="1"
                {{ old('active', $product->active) ? 'checked' : '' }}>
        </div>

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
