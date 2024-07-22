@extends('layouts.app')

@section('page-title')
    Crea Cocktails
@endsection

@section('main')
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-e text-center py-3">
                    Crea nuovo cocktail
                </h1>
            </div>
            <form action="{{ route('cocktails.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="text-e" for="exampleFormControlInput1" class="form-label">Nome
                                cocktail</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="text-e" for="exampleFormControlInput1" class="form-label">Ingredienti</label>
                            <input type="text" class="form-control" name="ingredients">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrizione</label>
                            <textarea rows="4" type="text" class="form-control" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="text-e" for="exampleFormControlInput1" class="form-label">Origine</label>
                            <input type="text" class="form-control" name="origin">
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex align-items-center justify-content-center">
                    <button class="btn btn-primary">Crea </button>
                    <div class="my-5 px-3">
                        <a class="btn btn-primary text-white" href="{{ route('cocktails.index') }}">Torna ai cocktails</a>
                    </div>
                </div>
            </form>
        </div>


    </div>
@endsection
