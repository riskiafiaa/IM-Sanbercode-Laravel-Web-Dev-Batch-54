@extends('layout.master')

@section('title', 'Detail Film')
@section('content')

    <h1>{{ $filmById->judul }}</h1>
    <img src="{{asset('poster/'.$filmById->poster)}}" alt="" class="rounded mx-auto d-block my-3">
    <p>{{ $filmById->ringkasan }}</p>
    <a href="/film" class="btn btn-info btn-sm">Kembali</a>
@endsection