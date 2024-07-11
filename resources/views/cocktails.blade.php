@extends('layouts.app')
@section('main')
    <div class="container mt-5">
        <div class="row">
            @foreach ($cocktails as $cocktail)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $cocktail->Nome }}</h5>
                            <div class="mb-2">
                                <strong>Partenza:</strong> {{ $cocktail->Categoria }}
                            </div>
                            <div class="mb-2">
                                <strong>Arrivo:</strong> {{ $cocktail->Ingredienti }}
                            </div>
                            <div class="mb-2">
                                <strong>Data partenza:</strong>
                                {{ $cocktail->Istruzioni }}
                            </div>
                            <div class="mb-2">
                                <strong>Data arrivo:</strong>
                                {{ $cocktail->Decorazione }}
                            </div>
                            <div class="mb-2">
                                <strong>Orario partenza:</strong>
                                {{ $cocktail->Origine }}
                            </div>

                            <a href="#" class="btn btn-success">Seleziona</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
