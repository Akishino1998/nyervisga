@extends('layout.master')
@section('judul','Nyervisga? | Biodata')

@section('konten')



<center>
    <div class=“container>
    <div class="p-3 mb-2 bg-secondary text-white">
        <img src="{{ asset('image/textnyervisga.png') }}" class="img-thumbnail" width="300" style="left:50px;" >
    </div>
    </div>
</center>
<div class="container">		
   <h1>Silahkan Isi Data Anda</h1> 
	<form>
		<div class="form-group">
			<label for="nama">Nama Depan:</label>
			<input type="text" class="form-control">
		</div>
        <div class="form-group">
			<label for="nama">Nama Belakang:</label>
			<input type="text" class="form-control">
		</div>
        <div class="form-group">
			<label for="nomor hp">Nomor Hp:</label>
			<input type="text" class="form-control">
		</div>
        <div class="form-group">
			<label for="email">Email:</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="alamat">Alamat anda:</label>
			<input type="text" class="form-control" id="alamat">
		</div>
        <div class="form-group">
			<label for="kode pos">Kode Pos:</label>
			<input type="text" class="form-control">
		</div>
        <div class="form-group">
			<label for="photo">Photo Profil:</label>
			<input type="text" class="form-control">
		</div>
        <center>
		    <button type="submit" class="btn btn-primary">Simpan</button>
        </center>
	</form>
</div>
			

   


@endsection
