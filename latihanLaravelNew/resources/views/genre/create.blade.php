@extends('layout.master')

@section('title', 'Add Genre')
@section('content')

    <form action="/genre" method="POST">
        @csrf
    <div class="form-group">
      <label >Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection