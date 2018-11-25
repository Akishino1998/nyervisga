@extends('layout.master')
@section('judul','Nyervisga? | LOGIN')

@section('konten')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<style>
.form-login{
    top: 200px;
    border-radius: 10px;
    padding: 50px;
}
.btn-login{
	cursor: pointer;
}
.btn-selesai{
	cursor: pointer;
}
.title-login{
    padding-bottom: 20px;
}
.inp {
  position: relative;
  margin: auto;
  width: 100%;
  padding-bottom: 20px;
}
.inp .label {
  position: absolute;
  top: 16px;
  left: 0;
  font-size: 16px;
  color: #9098a9;
  font-weight: 500;
  transform-origin: 0 0;
  transition: all 0.2s ease;
}
.inp .border {
  position: absolute;
  bottom: 0;
  left: 0;
  height: 2px;
  width: 100%;
  background: #07f;
  transform: scaleX(0);
  transform-origin: 0 0;
  transition: all 0.15s ease;
}
.inp input {
  -webkit-appearance: none;
  width: 100%;
  border: 0;
  font-family: inherit;
  padding: 12px 0;
  height: 48px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px solid #c8ccd4;
  background: none;
  border-radius: 0;
  color: #223254;
  transition: all 0.15s ease;
}
.inp input:hover {
  background: rgba(34,50,84,0.03);
}
.inp input:not(:placeholder-shown) + span {
  color: #5a667f;
  transform: translateY(-26px) scale(0.75);
}
.inp input:focus {
  background: none;
  outline: none;
}
.inp input:focus + span {
  color: #07f;
  transform: translateY(-26px) scale(0.75);
}
.inp input:focus + span + .border {
  transform: scaleX(1);
}
.inp-checkbox{
	top: -30px;
}
.toggle {
	left: 80px;
  margin: 0 0 1.5rem;
  box-sizing: border-box;
  font-size: 0;
  display: flex;
  flex-flow: row nowrap;
  justify-content: flex-start;
  align-items: stretch;
}
.toggle input {
  width: 0;
  height: 0;
  position: absolute;
  left: -9999px;
}
.toggle input + label {
  margin: 0;
  padding: .75rem 2rem;
  box-sizing: border-box;
  position: relative;
  display: inline-block;
  border: solid 1px #DDD;
  background-color: #FFF;
  font-size: 1rem;
  line-height: 140%;
  font-weight: 600;
  text-align: center;
  box-shadow: 0 0 0 rgba(255, 255, 255, 0);
  transition: border-color .15s ease-out,  color .25s ease-out,  background-color .15s ease-out, box-shadow .15s ease-out;
  /* ADD THESE PROPERTIES TO SWITCH FROM AUTO WIDTH TO FULL WIDTH */
  /*flex: 0 0 50%; display: flex; justify-content: center; align-items: center;*/
  /* ----- */
}
.toggle input + label:first-of-type {
  border-radius: 6px 0 0 6px;
  border-right: none;
}
.toggle input + label:last-of-type {
  border-radius: 0 6px 6px 0;
  border-left: none;
}
.toggle input:hover + label {
  border-color: #213140;
}
.toggle input:checked + label {
  background-color: #4B9DEA;
  color: #FFF;
  box-shadow: 0 0 10px rgba(102, 179, 251, 0.5);
  border-color: #4B9DEA;
  z-index: 1;
}
.toggle input:focus + label {
  outline: dotted 1px #CCC;
  outline-offset: .45rem;
}
@media (max-width: 800px) {
  .toggle input + label {
    padding: .75rem .25rem;
    flex: 0 0 50%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
}

/* STYLING FOR THE STATUS HELPER TEXT FOR THE DEMO */
.status {
  margin: 0;
  font-size: 1rem;
  font-weight: 400;
}
.status span {
  font-weight: 600;
  color: #B6985A;
}
.status span:first-of-type {
  display: inline;
}
.status span:last-of-type {
  display: none;
}
@media (max-width: 800px) {
  .status span:first-of-type {
    display: none;
  }
  .status span:last-of-type {
    display: inline;
  }
}
#elektronik{
	position: absolute;
	width: 100%;
}
.comboxbox-elektronik{
	bottom: -50px;
}
</style>
@section('konten')
<div class="container-fluid">
    <div class="row">
        <div class="space"></div>
        <div class="col-4"></div>
        <div class="col-4 form-login hvr-glow">
            <div class="outter-form-login">
                <div class="logo-login">
                    <em class="glyphicon glyphicon-user"></em>
                </div>
                    <form action="/elektronik" class="inner-login" method="post">
                    <h3 class="text-center title-login"><img src="{{ asset('image/textnyervisga.png') }}" alt="" width="200"> <br> Masukan Data Elektronikmu!</h3>
						<div class="form-group comboxbox-elektronik">
							<label class="inp inp-checkbox">
								<select name="elektronik" id="elektronik">
									<option value="" selected>Mau servis apa?</option>
									<option value="1">HP</option>
									<option value="2">PC</option>
									<option value="3">Laptop</option>
								</select>
							</label>
						</div>
						<div class="form-group">
							<label for="inp" class="inp">
								<input type="text" id="inp" placeholder="&nbsp;">
								<span class="label">Merk</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-group">
							<label for="inp" class="inp">
								<input type="text" id="inp" placeholder="&nbsp;">
								<span class="label">No. Seri</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-group">
							<label for="inp" class="inp">
								<input type="text" id="inp" placeholder="&nbsp;">
								<span class="label">Kerusakan</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-group">
							<label for="inp" class="inp">
								<input type="text" id="inp" placeholder="&nbsp;">
								<span class="label">Penyebab</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-group">
							<label for="inp" class="inp inp-checkbox">
								<span class="label">Mau Diservis Dimana?</span>
								<span class="border"></span>
							</label>
							<div class="toggle">
								<input class="radio" type="radio" name="sizeBy" value="d" id="sizeWeight" checked="checked" />
								<label for="sizeWeight">Di Rumah</label>
								<input class="radio" type="radio" name="sizeBy" value="uy" id="sizeDimensions" />
								<label for="sizeDimensions">Di Bawa</label>
							</div>
						</div>
						<hr>
						{{-- <input type="submit" class="btn btn-block btn-primary btn-login" value="Tambah Lagi" id="login"/> --}}
						<input type="submit" class="btn btn-block btn-success btn-selesai" value="Selesai" id="selesai"/>
						<input type="hidden" name="id_order" value="{{ $id_order }}">
						<input type="hidden" name="id_order" value="{{ $kode_pos }}">
						@csrf
                    </form>
            </div>
        </div>
        
    </div>
</div>
<div class="batas-login"></div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script>
	$('.radio').click(function(){
		alert($("input[type=radio]:checked").val());
		var e = document.getElementById("elektronik");
		var strUser = e.options[e.selectedIndex].value;
		alert(strUser);
	});
	$('#elektronik').select2({
	});
	$('#elektronik').click(function(){
		
	});
</script>
@endsection