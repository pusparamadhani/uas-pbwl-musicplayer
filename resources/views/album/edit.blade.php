@extends('layouts.app')
@section('content')

<div class="container">
	<h3>EDIT DATA ALBUM</h3>
	<form method="POST" action="{{ url('/album/' . $album->nama_id) }}">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>NAMA ALBUM</td>
				<td>
					<input type="text" class="form-control @error('album_nama') is-invalid @enderror" id="album_nama" placeholder="Masukkan Nama" name="album_nama" value="{{ $album->album_nama }}">
                    @error('album_nama')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                </div>
				</td>
			</tr>
			<tr>
				<td>ID ARTIST</td>
				<td>
					<select class="form-control @error('album_id_artist') is-invalid @enderror"  name="album_id_artist" id="album_id_artist">
                        @foreach($artists as $artist)
                        <option  value="{{ $artist->nama_id }}">{{ $artist->nama }}</option>
                        @endforeach
                    </select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection