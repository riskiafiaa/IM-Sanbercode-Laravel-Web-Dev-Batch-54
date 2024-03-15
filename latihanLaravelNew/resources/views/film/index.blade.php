@extends('layout.master')

@section('title', 'Semua Film')
@section('content')

@auth
<a href="/film/create" class="btn btn-primary btn-sm my-3">Tambah Film</a> 
@endauth
    <div class="container">
        <div class="row">
            @forelse ($film as $item)
            <div class="col-4">
                <div class="card">
                    <img src="{{asset('poster/'.$item->poster) }}" style="height: 200px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2>{{ $item->judul }}</h2>
                      <p class="card-text">{{Str::limit($item->ringkasan, 50) }}</p>
                      <a href="/film/{{ $item->id }}" class="btn btn-primary">Baca Selengkapnya</a>
                    @auth
                    <div class="row my-3">
                      <div class="col">
                          <a href="/film/{{$item->id}}/edit" class="btn btn-warning btn-sm btn-block">Edit</a>
                      </div>
                      <div class="col">
                          <form action="/film/{{$item->id}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger btn-sm btn-block">Delete</button>
                      </form>
                      </div>                        
                    @endauth
                    </div>
                    </div>
                  </div>
            </div>
            @empty
                <h3>Tidak Ada Film</h3>
            @endforelse
            
        </div>
    </div>
@endsection