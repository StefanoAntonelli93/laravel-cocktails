@extends('layouts.app')

@section('main')
    <div class="container">
        <h1>
            Home-page Cocktails
            <a href="{{ route('guest.index') }}" class="btn btn-secondary">Index</a>
        </h1>
    </div>
@endsection
