@extends('layout.master')
@section('judul','Nyervisga? | LOGIN')

@section('konten')
<div class="col-md-4 col-md-offset-4 form-register">
    
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

        <div class="outter-form-register">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-register">Register Nyervisga</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="confirm-password" class="form-control" name="password" placeholder="confirm-password">
                </div>

                <input type="submit" class="btn btn-block btn-custom-green" value="Register" />

                <div class="text-center forget">
                    <p>Sudah Punya akun ?</p>
                </div>

                <div class="text-center forget">
                    <p>Kembali ke home</p>
                </div>

            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
@endsection
