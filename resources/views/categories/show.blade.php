@extends('layouts.app')

@section('title', 'Détails de la Catégorie')

@section('content')
<div class="container mt-4">
    <h1>Détails de la catégorie</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text"><strong>Créée le :</strong> {{ $category->created_at->format('d/m/Y à H:i') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Modifier</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
</div>
@endsection
