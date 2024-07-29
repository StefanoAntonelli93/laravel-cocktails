@extends('layouts.app')

@section('main')
    <div class="container bg-info-subtle vh-100 py-5 d-flex flex-column justify-content-center align-items-center gap-5">
        <h1>
            "La pace nel mondo risiede dentro un cocktail."

        </h1>
        <a href="{{ route('cocktails.index') }}" class="btn btn-primary">Vai alla lista cocktails</a>
    </div>
@endsection
