@extends('layout.master')
@section('judul','Nyervisga? | Selamat Datang')

@section('konten')
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <img src="{{ asset('image/textnyervisga.png') }}" class="img-thumbnail" width="300">
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <span class="navbar-text">
               
            </span>
            <div class="form-inline my-2 my-lg-0">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Service</a>
                <a class="nav-link" href="#">Contact</a>
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </div>
        </div>
    </nav>
    

    <div class="jumbotron bg-success text-light ">
        
        <h1 class="display-4"> <img src="{{ asset('image/btn-bookService.png') }}" class="img-thumbnail mx-auto d-block" class="" width="250">
        
            <center>
                <p class="lead">Service</p>
            </center>
        </h1>

        <center>
        <hr class="my-4">
            <p>Jika anda ingin nyervis tekan tombol dibawah</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </center>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('image/network-3291853_960_720.png') }}" class="img-thumbnail mx-auto d-block" class="" width="150">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <img src="{{ asset('image/laptop_PNG5928.png') }}" class="img-thumbnail mx-auto d-block" class="" width="200">
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>



@endsection
