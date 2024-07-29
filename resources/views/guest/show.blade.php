@extends('layouts.app')
@section('page-title')
    Dettagli Cocktails
@endsection
@section('main')
    <div class="container vh-100 mt-5">
        <h2 class="text-center py-5">Dettagli Cocktail</h2>
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title fw-semibold mt-2 py-3">{{ $cocktail->name }}</h2>
                    <div class="mb-2 py-3">
                        <strong>Descrizione:</strong> {{ $cocktail->description }}
                    </div>
                    <div class="mb-2 py-3">
                        <strong>Origine:</strong>
                        {{ $cocktail->origin }}
                    </div>
                </div>
                <div class="mb-2">
                    <h4>Ingredients</h4>
                    <ul>
                        @foreach ($cocktail->ingredients as $ingredient)
                            <li>{{ $ingredient->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="d-flex justify-content-around card-footer">
                    <a href="{{ route('cocktails.index') }}" class="btn btn-primary">Torna ai cocktails</a>
                    <a href="{{ route('cocktails.edit', $cocktail->id) }}" class="btn btn-warning">Modifica</a>
                    <a href="{{ route('cocktails.destroy', $cocktail->id) }}" class="btn btn-danger">Elimina</a>
                </div>
            </div>
        </div>
    </div>
@endsection
