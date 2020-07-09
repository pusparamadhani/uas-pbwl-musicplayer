@extends('layouts.app')
@section('content')
 <div class="container">
     <h3>DAFTAR TRACK</h3>
     <a href="{{ url('track/create') }}" class="btn btn-primary my-3">Tambah Data Track</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>JUDUL</th>
                 <th>ALBUM</th>
                 <th>DURASI</th>
                 <th>FILE</th>
                 <th>AKSI</th>
             </tr>
             @foreach ($tracks as $track)
            <tr>
                <th scope='"row'>{{ $loop->iteration }}</th>
                <td>{{ $track->track_name }}</td>
                <td>{{ $track->track_id_album }}</td>
                <td>{{ $track->track_time }}</td>
                <td>
                    <audio controls>
                     <source value=" {{ $track->track_file }} "  type="audio/mpeg=">
                 </audio>
                </td>
                <td>
                    <a href="{{ url('track/' . $track->track_id . '/edit') }}" class="badge badge-info">Edit</a>
                <form action="{{ url('track/' . $track->track_id) }}" method="POST" class="d-inline">
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