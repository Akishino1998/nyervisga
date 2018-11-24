@extends('layout.master')
@section('judul','Nyervisga? | LOGIN')
<style>
.form-login{
    top: 200px;
    border-radius: 10px;
    padding: 50px;
}
.btn-login{
    cursor: pointer;
}
.title-login{
    padding-bottom: 20px;
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
                    <form action="/login" class="inner-login" method="post">
                    <h3 class="text-center title-login"><img src="{{ asset('image/textnyervisga.png') }}" alt="" width="200"> <br> LOGIN</h3>
                        @if (  Session::get('status')  == 'salah')
                            <div class="alert alert-warning" role="alert">
                                Username atau password salah!
                            </div>
                        @else
                            <script>window.location.href = '/';</script>
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-control username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                        </div>
                        <div class="form-check">
                            {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                            {{-- <label class="form-check-label" for="exampleCheck1">Remember me</label> --}}
                            <a href="" style="float:right">Forgot Password ?</a>
                            
                        </div>
                        <div class="text-center forget">
                            
                        </div>
                        <input type="submit" class="btn btn-block btn-primary btn-login" value="LOGIN" id="login"/>
                        <div class="text-center forget">
                            <p>Belum Punya akun? <a href="/register">Buat</a></p>
                            <p>Kembali ke <a href="/">home</a></p>
                        </div>
                        @csrf
                    </form>
            </div>
        </div>
        
    </div>
</div>
<div class="batas-login"></div>
@endsection