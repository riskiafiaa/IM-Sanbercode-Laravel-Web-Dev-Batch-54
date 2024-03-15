@extends('layout.master')

@section('title', 'Edit Cast')
@section('content')

    <form action="/cast/{{ $cast->id }}" method="POST">
        @csrf

        @method('put')

    <div class="form-group">
      <label >Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $cast->nama }}">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    {{-- <div class="form-group">
      <label >Umur</label>
      <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ $cast->umur }}">
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> --}}
    <div class="form-group">
        <label >Bio</label>
        <textarea class="form-control @error('bio') is-invalid @enderror" name="bio"  cols="30" rows="10">{{ $cast->bio }}</textarea>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection