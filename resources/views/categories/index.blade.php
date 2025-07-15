@extends('layouts.app')

@section('content')
    <h1>Liste des catégories</h1>
    <a href="{{ route('categories.create') }}">Créer une nouvelle catégorie</a>

    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->titre }}</a>
                <a href="{{ route('categories.edit', $category->id) }}">Modifier</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
