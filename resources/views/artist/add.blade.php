@extends('layouts.app')
@section('content')

<div class="container">
	<h3>TAMBAH DATA ARTIST</h3>
	<form method="POST" action="{{ url('/artist') }}">
		@csrf
		<table>
			<tr>
				<td>NAMA ARTIST</td>
				<td>
					<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
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