@extends('layout.master')

@section('title', 'All Cast')
@section('content')
<a href="/cast/create" class="btn btn-primary my-3">Add Cast</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $keys=>$casts)
            <tr>
            <th scope="row">{{ $keys + 1 }}</th>
            <td>{{ $casts->nama }}</td>
            <td>{{ $casts->umur }}</td>
            <td>
                <form action="/cast/{{ $casts->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/cast/{{ $casts->id }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{ $casts->id }}/edit" class="btn btn-warning btn-sm">Update</a>
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
            </tr>
        @empty
        <tr>
            <td>Cast Kosong!</td>
        </tr>
            
        @endforelse
      
    </tbody>
  </table>

@endsection