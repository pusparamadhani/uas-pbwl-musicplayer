@extends('layouts.app')
@section('content')

<div class="container">
	<h3>EDIT DATA PLAYED</h3>
	<form method="POST" action="{{ url('/played/' . $played->play_id) }}">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>ARTIST</td>
				<td>
					 <input type="text" class="form-control @error('artist_id') is-invalid @enderror" id="artist_id" placeholder="Masukkan Nama" name="artist_id" value="{{ $played->artist_id }}">
                    @error('artist_id')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    </div>
				</td>
			</tr>
			<tr>
				<td>ALBUM</td>
				<td>
					<input type="text" class="form-control @error('album_id') is-invalid @enderror" id="album_id" placeholder="Masukkan Nama" name="album_id" value="{{ $played->album_id }}">
                    @error('album_id')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                    </div>
				</td>
			</tr>
			<tr>
				<td>TRACK</td>
				<td>
					<input type="file" class="form-control @error('track_id') is-invalid @enderror" id="track_id" placeholder="Masukkan durasi" name="track_id"  value="{{ $played->track_id }}">
                    @error('track_id')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                </div>
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