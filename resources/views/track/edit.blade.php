@extends('layouts.app')
@section('content')

<div class="container">
	<h3>EDIT DATA TRACK</h3>
	<form method="POST" action="{{ url('/track/' . $tracks->track_id) }}">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>JUDUL</td>
				<td>
					<input type="text" class="form-control @error('track_name') is-invalid @enderror" id="track_name" placeholder="Masukkan Nama" name="track_name" value="{{ $tracks->track_name }}">
                    @error('track_name')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
                </div>
				</td>
			</tr>
			<tr>
				<td>ALBUM</td>
				<td>
					 <select class="form-control @error('track_id_album') is-invalid @enderror"  name="track_id_album" id="track_id_album">
                        @foreach($albums as $album)
                        <option  value="{{ $album->album_id }}">{{ $album->album_nama }}</option>
                        @endforeach
                    </select>
				</td>
			</tr>
			<tr>
				<td>DURASI</td>
				<td>
					 <input type="text" class="form-control @error('track_time') is-invalid @enderror" id="track_time" placeholder="Masukkan Nama" name="track_time" value="{{ $tracks->track_time }}">
                    @error('track_time')
                        <div class="invalid-feedback">{{$message}}
                    @enderror
				</td>
			</tr>
			<tr>
				<td>FILE</td>
				<td>
					 <input type="file" class="form-control @error('track_file') is-invalid @enderror" id="track_file" placeholder="Masukkan Nama" name="track_file" value="{{ $tracks->track_file }}">
                    @error('track_file')
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