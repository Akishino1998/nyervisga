<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <link rel="icon" type="image/png" href="{{ asset('image/logonyervisga.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/main_styles.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}"> 

    
</head>
<body>
    	<header class="header">

		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Mau Bertanya?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+6285828949395</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>ekopujianto48@gmail.com</div>
									</li>
								</ul>
								{{-- tombol --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text"> <img src=" {{ asset('images\logo\logonyervisga.png') }}" alt="Nyevirga?"> </div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="/" class="hvr-underline-from-center">Home</a></li>
									<li><a href="about.html" class="hvr-underline-from-center">Mau Service?</a></li>
									<li><a href="courses.html" class="hvr-underline-from-center">Cara Kerja Kami</a></li>
									<li><a href="courses.html" class="hvr-underline-from-center">Tentang Kami</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="newsletter_container2 d-flex flex-lg-row flex-column align-items-center justify-content-start">

							<!-- Newsletter Content -->
							<div class="newsletter_content text-lg-left text-center">
								<div class="newsletter_title">Lacak Elekronik yang kamu service</div>
								<div class="newsletter_subtitle"></div>
							</div>

							<!-- Newsletter Form -->
							<div class="newsletter_form_container ml-lg-auto">
								<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
									<input type="email" class="newsletter_input" placeholder="Kode Unik Nyervismu ...." required="required">
									<button type="submit" class="newsletter_button">Lacak</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	@yield('konten')
	
</body>
</html>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
@yield('script')

