@extends('layouts.app')
@section('content')

<div class="container">
	<h3>TAMBAH DATA PLAYED</h3>
	<form method="POST" action="{{ url('/played') }}">
		@csrf
		<table>
			<tr>
				<td>ARTIST</td>
				<td>
					 <input type="text" class="form-control @error('artist_id') is-invalid @enderror" id="artist_id" placeholder="Masukkan Nama" name="artist_id" value="{{ old('artist_id') }}">
                    @error('artist_id')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    </div>
				</td>
			</tr>
			<tr>
				<td>ALBUM</td>
				<td>
					<input type="text" class="form-control @error('album_id') is-invalid @enderror" id="album_id" placeholder="Masukkan Nama" name="album_id" value="{{ old('album_id') }}">
                    @error('album_id')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    </div>
				</td>
			</tr>
			<tr>
				<td>TRACK</td>
				<td>
					<input type="file" class="form-control @error('track_id') is-invalid @enderror" id="track_id" placeholder="Masukkan durasi" name="track_id" value="{{ old('track_file') }}">
                    @error('track_id')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                </div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection