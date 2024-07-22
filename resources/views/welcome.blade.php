@extends('layouts.app')

@section('main')
    <div class="container vh-100 py-5">
        <h1>
            Home-page Cocktails

        </h1>
        <a href="{{ route('cocktails.index') }}" class="btn btn-primary">Vai alla lista cocktails</a>
    </div>
@endsection
