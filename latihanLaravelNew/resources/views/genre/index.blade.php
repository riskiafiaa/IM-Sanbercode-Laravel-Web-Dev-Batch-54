@extends('layout.master')

@section('title', 'All genre')
@section('content')
<a href="/genre/create" class="btn btn-primary my-3">Add Genre</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($genre as $keys=>$genres)
            <tr>
            <th scope="row">{{ $keys + 1 }}</th>
            <td>{{ $genres->nama }}</td>
            <td>
                <form action="/genre/{{ $genres->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/genre/{{ $genres->id }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/genre/{{ $genres->id }}/edit" class="btn btn-warning btn-sm">Update</a>
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
            </tr>
        @empty
        <tr>
            <td>Genre Kosong!</td>
        </tr>
            
        @endforelse
      
    </tbody>
  </table>

@endsection