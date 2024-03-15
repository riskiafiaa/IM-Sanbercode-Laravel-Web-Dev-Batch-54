@extends('layout.master')

@section('title', 'Edit Film')
@section('content')

    <form action="/film/{{ $filmById->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
    <div class="form-group">
      <label >Judul Film</label>
      <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $filmById->judul }}">
        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label >Ringkasan Film</label>
      <input type="text" class="form-control @error('ringkasan') is-invalid @enderror" name="ringkasan" value="{{ $filmById->ringkasan}}">
        @error('ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label >Tahun Film</label>
      <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ $filmById->tahun }}">
        @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Genre Film</label>
        <select name="genre_id" class="form-control @error('genre_id') is-invalid @enderror" name="tahun">
            <option value="">--Pilih Genre--</option>
            @forelse ($genre as  $item)
                @if ($item->id === $filmById->genre_id)
                <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                @else
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endif                
            @empty
                <option value="">Tidak Ada Genre</option>
            @endforelse
        </select>
        @error('genre_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label >Poster Film</label>
        <input type="file" class="form-control @error('poster') is-invalid @enderror" name="poster">
          @error('poster')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection