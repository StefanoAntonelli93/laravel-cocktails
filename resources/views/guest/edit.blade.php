@extends('layouts.app')

@section('main')
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-e text-center">
                    Modifica un cocktails: {{ $cocktail->title }}
                </h1>
            </div>
            <form action="{{ route('cocktails.update', $cocktail->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="text-e" for="exampleFormControlInput1" class="form-label">Nome
                                cocktail</label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $cocktail->name) }}">
                        </div>
                        <div class="mb-3">
                            <label class="text-e" for="exampleFormControlInput1" class="form-label">Ingredienti</label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $cocktail->ingredients) }}">
                        </div>
                        <div class="mb-3">
                            <label class="text-e" for="exampleFormControlInput1" class="form-label">Descrizione</label>
                            <input type="text" class="form-control" name="description"
                                value="{{ old('description', $cocktail->description) }}">
                        </div>
                        <div class="mb-3">
                            <label class="text-e" for="exampleFormControlInput1" class="form-label">Inserisci
                                immagine</label>
                            <input type="text" class="form-control" name="thumb"
                                value="{{ old('thumb', $cocktail->thumb) }}">
                        </div>
                        <div class="mb-3">
                            <label class="text-e" for="exampleFormControlInput1" class="form-label">Origine</label>
                            <input type="text" class="form-control" name="price"
                                value="{{ old('price', $cocktail->origin) }}">
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex align-items-center justify-content-center">
                    <button class="btn btn-primary">Modifica</button>
                    <div class="my-5 px-3">
                        <a class="btn btn-primary text-white" href="{{ route('cocktails.index') }}">Torna alla Home</a>
                    </div>
                </div>
            </form>
        </div>


    </div>
@endsection
