@extends('layouts.app')
@section('content')
 <div class="container">
     <h3>DAFTAR ALBUM </h3>
     <a href="{{ url('album/create') }}" class="btn btn-primary my-3">Tambah Data Album</a>
      @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>NAMA ALBUM</th>
                 <th>ID ARTIST</th>
                 <th>AKSI</th>
             </tr>
             @foreach ($album as $album)
            <tr>
                <th scope='"row'>{{ $loop->iteration }}</th>
                <td>{{ $album->album_nama }}</td>
                <td>{{ $album->album_id_artist }}</td>
                <td>
                    <a href="{{ url('album/' . $album->album_id . '/edit') }}" class="badge badge-info">Edit</a>
                <form action="{{ url('album/' . $album->album_id) }}" method="POST" class="d-inline">
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