@extends('layouts.app')

@section('content')
    <h1>Liste des catégories</h1>

    <ul>
        @forelse ($categories as $category)
            <li>
                <strong>{{ $category->name }}</strong>
                {{ $category->description }}
            </li>
        @empty
            <li>Aucune catégorie.</li>
        @endforelse
    </ul>
@endsection
