@extends('layout.master')

@section('title', 'Add Film')
@section('content')

    <form action="/film" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
      <label >Judul Film</label>
      <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul">
        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label >Ringkasan Film</label>
      <input type="text" class="form-control @error('ringkasan') is-invalid @enderror" name="ringkasan">
        @error('ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label >Tahun Film</label>
      <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun">
        @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    {{-- <div class="form-group">
      <label >Poster Film</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> --}}

    <div class="form-group">
        <label>Genre Film</label>
        <select name="genre_id" class="form-control @error('genre_id') is-invalid @enderror" name="tahun">
            <option value="">--Pilih Genre--</option>
            @forelse ($genre as  $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                
            @empty
                <option value="">Tidak ada Genre</option>
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