@extends('layouts.app')
@section('main')
    <div class="container">
        <h1>
            Home-page Cocktails
        </h1>
        <a href="{{ route('cocktails.index') }}">vai a</a>
    </div>
@endsection
