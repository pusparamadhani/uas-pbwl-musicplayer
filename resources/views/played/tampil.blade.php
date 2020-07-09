@extends('layouts.app')
@section('content')
 <div class="container">
     <h3>DAFTAR PLAYED</h3>
     <a href="{{ url('played/create') }}" class="btn btn-primary my-3">Tambah Data Played</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>ARTIST</th>
                 <th>ALBUM</th>
                 <th>TRACK</th>
                 <th>AKSI</th>
             </tr>
             @foreach ($played as $played)
            <tr>
                <th scope='"row'>{{ $loop->iteration }}</th>
                <td>{{ $played->artist_id }}</td>
                <td>{{ $played->album_id }}</td>
                <td>
                     <audio controls>
                     <source value=" {{ $played->track_id }} "  type="audio/mpeg=">
                 </audio>
                </td>
                <td>
                    <a href="{{ url('played/' . $played->play_id . '/edit') }}" class="badge badge-info">Edit</a>
                <form action="{{ url('played/' . $played->play_id) }}" method="POST" class="d-inline">
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