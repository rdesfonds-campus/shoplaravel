@extends('layouts.app')

@section('content')
    <h1>Liste des produits</h1>

    <ul>
        @foreach($products as $product)
            <li>
                #{{ $product['id'] }} — {{ $product['name'] }} — {{ $product['price'] }}
            </li>
        @endforeach
    </ul>
@endsection
