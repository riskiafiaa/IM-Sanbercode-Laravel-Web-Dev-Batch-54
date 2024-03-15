@extends('layout.master')

@section('title', 'Edit Genre')
@section('content')

    <form action="/genre/{{ $genre->id }}" method="POST">
        @csrf

        @method('put')

    <div class="form-group">
      <label >Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $genre->nama }}">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection