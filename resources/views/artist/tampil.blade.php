@extends('layouts.app')
@section('content')
 <div class="container">
     <h3>DAFTAR ARTIST </h3>
     <a href="{{ url('artist/create') }}" class="btn btn-primary my-3">Tambah Data Artist</a>
      @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>NAMA ARTIST</th>
                 <th>AKSI</th>
             </tr>
             @foreach ($artist as $artist)
            <tr>
                <th scope='"row'>{{ $loop->iteration }}</th>
                <td>{{ $artist->nama }}</td>
                <td>
                    <a href="{{ url('artist/' . $artist->nama_id . '/edit') }}" class="badge badge-info">Edit</a>
                <form action="{{ url('artist/' . $artist->nama_id) }}" method="POST" class="d-inline">
                    <input type="hidden" name="_method" value="DELETE">
                    @method('delete')
                    @csrf
                    <button class="badge badge-danger">Hapus</button>
                </form>
                </td>
            </tr>
            @endforeach
             </thead>
        </table>
</div>
@endsection