<!DOCTYPE html>
<html lang="en">
	@php $productNav = [ [ 'title' => 'Bantaeng', 'slug' => 'bantaeng', ], [
	'title' => 'Bukukkumba', 'slug' => 'bukukkumba', ], [ 'title' => 'Gowa',
	'slug' => 'gowa', ], [ 'title' => 'Pare-pare', 'slug' => 'pare-pare', ], [
	'title' => 'Belopa', 'slug' => 'belopa', ], [ 'title' => 'Mamuju', 'slug' =>
	'mamuju', ], [ 'title' => 'Maros', 'slug' => 'maros', ], [ 'title' => 'Bogor',
	'slug' => 'bogor', ], [ 'title' => 'Sengkang', 'slug' => 'sengkang', ], [
	'title' => 'Bandung', 'slug' => 'bandung', ], [ 'title' => 'Gorontalo', 'slug'
	=> 'gorontalo', ], [ 'title' => 'Kendari', 'slug' => 'kendari', ], [ 'title'
	=> 'Malili', 'slug' => 'malili', ], [ 'title' => 'Palopo', 'slug' => 'palopo',
	], ]; @endphp

	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />

		<title>Zarindah Group</title>
		<meta name="author" content="Rosihan" />

		<!-- Favicons -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="assets/img/favicon/apple-touch-icon.png" />
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="assets/img/favicon/favicon-32x32.png" />
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="assets/img/favicon/favicon-16x16.png" />
		<link rel="manifest" href="assets/img/favicon/site.webmanifest" />

		<!-- Google Fonts -->
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900"
			rel="stylesheet" />

		<!-- Vendor CSS Files -->
		<link
			href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"
			rel="stylesheet" />
		<link
			href="{{ asset('assets/vendor/animate.css/animate.min.css') }}"
			rel="stylesheet" />
		<link
			href="{{ asset('assets/vendor/icofont/icofont.min.css') }}"
			rel="stylesheet" />
		<link
			href="{{ asset('assets/vendor/venobox/venobox.css') }}"
			rel="stylesheet" />
		<link
			href="{{ asset('assets/vendor/flickity.css/flickity.css') }}"
			rel="stylesheet" />

		<!-- Template Main CSS File -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
	</head>

	<body>
		<header id="header" class="fixed-top header">
			<div class="container">
				<div class="logo float-left">
					<a href="/" class="text-white">
						<img
							src="{{ asset('assets/img/logo_tok.webp') }}"
							alt=""
							class="img-fluid" />
					</a>
					<span class="text-white font-weight-bold">Zarindah<br />Group</span>
				</div>

				<nav class="nav-menu float-right d-none d-lg-block font-weight-bold">
					<ul>
						<li
							class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
							<a href="{{ route('home') }}">Home</a>
						</li>
						<li
							class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
							<a href="{{ route('about') }}">Tentang Kami</a>
						</li>
						<li
							class="nav-item dropdown {{ Route::currentRouteName() == 'product' ? 'active' : '' }}">
							<a
								class="nav-link dropdown-toggle"
								href="#"
								id="navbarDropdown"
								role="button"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false">
								Produk
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								@foreach($productNav as $product)
								<a
									class="dropdown-item {{ request()->is('product/' . $product['slug']) ? 'active' : '' }}"
									href="{{ route('product', ['slug' => $product['slug']]) }}"
									>{{ $product["title"] }}</a
								>
								@endforeach
							</div>
						</li>
						<li
							class="{{ Route::currentRouteName() == 'article' ? 'active' : '' }}">
							<a href="{{ route('article') }}">Artikel</a>
						</li>
						<li
							class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
							<a href="{{ route('contact') }}">Top Manajemen</a>
						</li>
					</ul>
				</nav>
				<!-- .nav-menu -->
			</div>
		</header>
		<!-- End #header -->

		@yield('content')

		<footer id="footer">
			<!-- Footer Content -->
			<div class="container">
				<div class="row contact">
					<div class="col-lg-4 col-md-6">
						<div class="contact-about">
							<h3>Zarindah Group</h3>
							<p>Hunian nyaman, mudah dimiliki</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="contact-about">
							<h3>Social-Links</h3>
							<div class="social-links">
								<a
									href="https://www.facebook.com/share/i6x7F7U7EKmWDBi1/?mibextid=JRoKGi"
									class="facebook"
									><i class="icofont-facebook"></i
								></a>
								<a href="https://www.tiktok.com/@new.zarindah" class="tiktok"
									><i class="icofont-tiktok"></i
								></a>
								<a
									href="https://www.instagram.com/newzarindah"
									class="instagram"
									><i class="icofont-instagram"></i
								></a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="info">
							<div>
								<i class="icofont-google-map"></i>
								<p>
									Jl. Pelita Raya No.42, Balla Parang, Kec. Rappocini, Kota
									Makassar, Sulawesi Selatan
								</p>
							</div>

							<div>
								<i class="icofont-ui-dial-phone"></i>
								<p>0821-3488-8856</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Vendor JS Files -->
		<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{
				asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')
			}}"></script>
		<script src="{{
				asset('assets/vendor/jquery.easing/jquery.easing.min.js')
			}}"></script>
		<script src="{{
				asset('assets/vendor/php-email-form/validate.js')
			}}"></script>
		<script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
		<script src="{{
				asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')
			}}"></script>
		<script src="{{
				asset('assets/vendor/flickity.js/flickity.pkgd.min.js')
			}}"></script>

		<!-- Template Main JS File -->
		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>
