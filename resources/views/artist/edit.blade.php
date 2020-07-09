@extends('layouts.app')
@section('content')

<div class="container">
	<h3>EDIT DATA ARTIST</h3>
	<form method="POST" action="{{ url('/artist/' . $artist->nama_id) }}">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>NAMA ARTIST</td>
				<td>
					 <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $artist->nama }}">
                    @error('nama')
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