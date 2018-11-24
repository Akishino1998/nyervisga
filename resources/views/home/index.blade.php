@extends('layout.master')
@section('judul','Nyervisga? | Selamat Datang')

@section('konten')
    <div class="super_container">
	<!-- Header -->
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

	<!-- Home -->
	<div class="home">
		<div class="home_slider_container">
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" ><img src="{{ asset('images/slider/slider_ex_1.jpg') }}" alt=""></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title font-color-white">Service Elekronikmu Tanpa Harus Keluar Rumah</div>
									<div class="home_slider_form_container ">
                                        <button type="submit" class="home_search_button hvr-bounce-in "><a href="/lokasi-anda">SERVIS YUK!!!</a></button>
                                        <br><h4 class="home_button ">Selengkapnya<br>
                                        <i class="fa fa-arrow-down fa-3x home_button_arrow hvr-icon-down" aria-hidden="true"></i>
                                        </h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Home Slider Nav -->

		{{-- <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left " aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div> --}}
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title hvr-underline-reveal">Kenapa Nyervis elekronik, di <br>"Nyervis<span style="color:#14bdee">ga</span>?"!</h2>
						<!-- <div class="section_subtitle">
							<p> </p>
						</div> -->
					</div>
				</div>
			</div>
			<div class="row features_row">
				<!-- Features Item -->
				<div class="col-lg-3 feature_col hvr-grow">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/home/truck2.png" alt=""></div>
						<h3 class="feature_title">Pick Up & Delivery</h3>
						<div class="feature_text"><p>Kamu tak perlu sampai keluar rumah hanya untuk sekedar service elektronikmu.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col hvr-grow">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/home/monitor.png" alt=""></div>
						<h3 class="feature_title">Monitoring</h3>
						<div class="feature_text"><p>Kamu bisa memonitor, sudah sampai manakah perjalanan elektronikmu.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col hvr-grow">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/home/garansi.png" alt=""></div>
						<h3 class="feature_title">Garansi</h3>
						<div class="feature_text"><p>Setiap elektronik yang kamu service di "Nyervis<span style="color:#14bdee">ga</span>?", kami jamin dengan garansi sesuai elektronik yang kamu service.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col hvr-grow">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/home/konsul.png" alt=""></div>
						<h3 class="feature_title">Konsultasi</h3>
						<div class="feature_text"><p>Setelah kamu mendaftar di "Nyervis<span style="color:#14bdee">ga</span>?", kamu bisa berkonsultasi terlebih dahulu tentang kerusakan elekronikmu.</p></div>
					</div>
				</div>
			</div>

			<div class="row features_row">
				<!-- Features Item -->
				<div class="col-lg-3 feature_col hvr-grow">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/home/service.png" alt=""></div>
						<h3 class="feature_title">Nyervis di tempat</h3>
						<div class="feature_text"><p>Tak perlu khawatir dengan elektronikmu, kami juga bisa menyervise di rumahmu, lho! Tentunya, tak semua servisan, ya.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col hvr-grow">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/home/man.png" alt=""></div>
						<h3 class="feature_title">Teknisi Ahli</h3>
						<div class="feature_text"><p>Tak perlu khawatir dengan elektronikmu, karena partner service kami sangat berpengalaman dibidangnya.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col hvr-grow">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/home/aman.png" alt=""></div>
						<h3 class="feature_title">Keamanan</h3>
						<div class="feature_text"><p>Kurir yang menerima elektronikmu kami pastikan aman, karena kami menyeleksi secara ketat setiap kurir dan kelengkapan berkas si kurir tersebut.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col hvr-grow">
					<!-- <div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Keamanan Data</h3>
						<div class="feature_text"><p>Setiap elektronik yang kamu servise di "Nyervis<span style="color:#14bdee">ga</span>?", </p></div>
					</div> -->
				</div>

			</div>
			<!-- <div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="#">Selengkapnya ....</a></div>
				</div>
			</div> -->
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title hvr-underline-reveal">Langkah mudah service elektronik di "Nyervis<span style="color:#14bdee">ga</span>?"</h2>
						<!-- <div class="section_subtitle"><p>Bagaimana saya service di "Nyervis<span style="color:#14bdee">ga</span>?" ?</p></div> -->
					</div>
				</div>
			</div>
			<div class="row events_row">
				<!-- Event -->
				<div class="col-lg-3 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="images/event_1.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">1</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Daftarkan dirimu</a></div>
								<div class="event_info_container">
									<div class="event_text">
										<p class="txt-justify">Klik tombol daftar di bawah ini.</p>
									</div>
									<a href="#awd" class="btn-center">
										<button type="button" class="btn btn-info">Daftar</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-3 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/event_2.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">2</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Pilih Elekronik Yang Mau Di-<i>service</i></a></div>
								<div class="event_info_container">
									<div class="event_text">
										<p class="txt-justify">Pilih jenis elekronik apa yang ingin kamu service.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-3 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">3</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Apa Kerusakan Elekronikmu</a></div>
								<div class="event_info_container">
									<div class="event_text">
										<p class="txt-justify">Pastikan apakah kerusakan elektronik milikmu. Jika tidak tau apa kerusakannya, kamu bisa melewatinya.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">4</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Submit Elekronikmu</a></div>
								<div class="event_info_container">
									<div class="event_text">
										<p class="txt-justify">Setelah kelengkapan data sudah siap, kamu tinggal nunggu deh elekronikmu diservice.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row events_row">
				<!-- Event -->
				<div class="col-lg-3 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="images/event_1.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">5</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Pantau Elekronikmu</a></div>
								<div class="event_info_container">
									<div class="event_text">
										<p class="txt-justify">Saat elektronik milikmu sudah kamu service dan kamu khawatir, kamu tinggal pantau aja, sejauh mana prosesnya.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-3 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/event_2.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">6</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Elekronik diterima</a></div>
								<div class="event_info_container">
									<div class="event_text">
										<p class="txt-justify">Elekronik yang telah kamu terima, dapat kamu cek terlebih dahulu untuk memastikan semua OK!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-3 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">7</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Bayar</a></div>
								<div class="event_info_container">
									<div class="event_text">
										<p class="txt-justify">Jika keadaan OK, maka kamu harus membayarnya lho, ya! </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/event_3.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">8</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Beri Rating</a></div>
								<div class="event_info_container">
									<div class="event_text">
										<p class="txt-justify">Berikan penilaianmu terhadap kepuasanmu dengan pelayanan dari kami.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="#">view all courses</a></div>
				</div>
			</div> -->
		</div>
	</div>


	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/background/partner-background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Partner Kami</h2>
					</div>
				</div>
			</div>
			<div class="row team_row">

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/partner/java.png" alt="Java Computer"></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Java Computer</a></div>
							<div class="team_subtitle">Service Komputer</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/partner/dc.png" alt="Doctor Computer"></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Doctor Computer</a></div>
							<div class="team_subtitle">Service Computer</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>

				<!-- Team Item -->
				<!-- <div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_3.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">John Tyler</a></div>
							<div class="team_subtitle">Quantum mechanics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> -->

				<!-- Team Item -->
				<!-- <div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/team_4.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Veronica Vahn</a></div>
							<div class="team_subtitle">Math & Physics</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</div>


	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

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

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer/footer2.jpg); opacity:0.5"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-6 footer_col">

								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text"><img src="images\logo\textnyervisga.png" alt="Nyevirga?"></div>
										</a>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>

							</div>

							<div class="col-lg-6 footer_col">

								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Hubungi Kami</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: nyervisga@gmail.com</li>
											<li>Phone:  +6285828949395</li>
											<li>Jalan Pangeran Suryanata Graha Indah RT. 57 No. 83</li>
										</ul>
									</div>
								</div>

							</div>



						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Pertanyaan & Keluhan</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
@endsection
