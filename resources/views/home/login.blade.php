@extends('layout.master')
@section('judul','Nyervisga? | LOGIN')

@section('konten')
<div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Login Nyervisga</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="form-check">
                	<input type="checkbox" class="form-check-input" id="exampleCheck1">
                	<label class="form-check-label" for="exampleCheck1">Remember me</label>
                	<label class="form-check-label" for="exampleCheck1" style="float: right;">Forgot Password ?</label>
                </div>
                
                <div class="text-center forget">
                    
                </div>

                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />

                <div class="text-center forget">
                    <p>Belum Punya akun</p>
                </div>

                <div class="text-center forget">
                    <p>Kembali ke home</p>
                </div>

            </form>
        </div>
    </div>
@endsection
