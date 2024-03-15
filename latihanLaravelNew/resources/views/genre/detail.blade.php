@extends('layout.master')

@section('title', 'Detail genre')
@section('content')

    <h1 class="text-primary">{{ $genre->nama }}</h1>
    <a href="/genre" class="btn btn-primary btn-sm my-3">Back</a>

@endsection