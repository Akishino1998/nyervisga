@extends('layout.master')
@section('judul','Nyervisga? | LOGIN')

@section('konten')

<form>
	<div class="form-group">
		<label for="exampleInput">Merk</label>
		<input type="text" class="form-control" id="exampleInput" placeholder="Merk">
	</div>

	<div class="form-group">
		<label for="exampleInput">No. Seri</label>
		<input type="text" class="form-control" id="exampleInput" placeholder="No.Seri">
	</div>

	<div class="form-group">
		<label for="exampleInput">Kelengkapan</label>
		<input type="text" class="form-control" id="exampleInput" placeholder="Kelengkapan">
	</div>

	<div class="form-group">
		<label for="exampleFormControlTextarea1">Kenapa Bisa Rusak?</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
 </form>

@endsection