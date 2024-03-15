@extends('layout.master')

@section('title', 'Edit Profile')
@section('content')

    <form action="/profil/{{ $profil['id'] }}" method="POST">
        @csrf

        @method('put')

    <div class="form-group">
      <label >Umur</label>
      <input type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ $profil->umur}}">
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label >Biodata</label>
        <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" cols="30" rows="10">{{ $profil->bio }}</textarea>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
      <label >Alamat</label>
      <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $profil->alamat}}">
        @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection