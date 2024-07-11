@extends('layouts.app')
@section('main')
    <div class="container mt-5">
        <div class="row">
            @foreach ($cocktails as $cocktail)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $cocktail->name }}</h5>
                            <div class="mb-2">
                                <strong>Ingredienti:</strong> {{ $cocktail->ingredients }}
                            </div>
                            <div class="mb-2">
                                <strong>Descrizione:</strong> {{ $cocktail->description }}
                            </div>
                            <div class="mb-2">
                                <strong>Origine:</strong>
                                {{ $cocktail->origin }}
                            </div>

                            <a href="#" class="btn btn-success">Seleziona</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
