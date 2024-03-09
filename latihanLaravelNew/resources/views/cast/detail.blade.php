@extends('layout.master')

@section('title', 'Detail Cast')
@section('content')

    <h1 class="text-primary">{{ $cast->nama }}</h1>
    <p>{{ $cast->bio }}</p>
    <a href="/cast" class="btn btn-primary btn-sm my-3">Back</a>

@endsection