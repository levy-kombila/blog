@extends('layouts.app')

@section('content')
    <h1>Créer une catégorie</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre"><br>

        <label for="contenu">Contenu :</label>
        <textarea name="contenu" id="contenu"></textarea><br>

        <button type="submit">Créer</button>
    </form>
@endsection
