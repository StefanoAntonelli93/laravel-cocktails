@extends('layouts.app')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center my-5"><strong></strong></h1>
        <div class="row">
            @foreach ($cocktails as $cocktail)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title fw-semibold mt-2">{{ $cocktail->name }}</h2>
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
                        </div>
                        <div class="d-flex justify-content-around card-footer">
                            <a href="#" class="btn btn-primary m-3"><i class="fa-solid fa-magnifying-glass"></i></a>
                            <a href="#" class="btn btn-warning m-3"><i class="fa-solid fa-pen"></i></a>
                            <a href="#" class="btn btn-danger m-3"><i class="fa-solid fa-bomb"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="#" class="btn btn-success">Torna su</a>
    </div>
@endsection
