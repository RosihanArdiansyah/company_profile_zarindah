<!DOCTYPE html>
<html lang="en">
@php
    $productNav = [
        [
            'title' => 'Bantaeng',
            'slug' => 'bantaeng',
        ],
        [
            'title' => 'Bukukkumba',
            'slug' => 'bukukkumba',
        ],
        [
            'title' => 'Gowa',
            'slug' => 'gowa',
        ],
        [
            'title' => 'Pare-pare',
            'slug' => 'pare-pare',
        ],
        [
            'title' => 'Belopa',
            'slug' => 'belopa',
        ],
        [
            'title' => 'Mamuju',
            'slug' => 'mamuju',
        ],
        [
            'title' => 'Maros',
            'slug' => 'maros',
        ],
        [
            'title' => 'Bogor',
            'slug' => 'bogor',
        ],
        [
            'title' => 'Sengkang',
            'slug' => 'sengkang',
        ],
        [
            'title' => 'Bandung',
            'slug' => 'bandung',
        ],
        [
            'title' => 'Gorontalo',
            'slug' => 'gorontalo',
        ],
        [
            'title' => 'Kendari',
            'slug' => 'kendari',
        ],
        [
            'title' => 'Malili',
            'slug' => 'malili',
        ],
        [
            'title' => 'Palopo',
            'slug' => 'palopo',
        ],
    ];
@endphp

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Zarindah Group</title>
    <meta name="author" content="Rosihan">

    <!-- Favicons -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/flickity.css/flickity.css')}}" rel="stylesheet"/>

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <header id="header" class="fixed-top header">
    <div class="container">

    <div class="logo float-left">
        <a href="/" class="text-white">
            <img src="assets/img/logo_tok.webp" alt="" class="img-fluid">
            
        </a>
        <span class="text-white font-weight-bold">Zarindah<br>Group</span>
    </div>

    <nav class="nav-menu float-right d-none d-lg-block font-weight-bold">
			<ul>
				<li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
				<li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">Tentang Kami</a></li>
				<li class="nav-item dropdown {{ Route::currentRouteName() == 'product' ? 'active' : '' }}">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Produk
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@foreach($productNav as $product)
							<a class="dropdown-item {{ request()->is('product/' . $product['slug']) ? 'active' : '' }}" href="{{ route('product', ['slug' => $product['slug']]) }}">{{ $product['title'] }}</a>
						@endforeach
					</div>
				</li>
				<li class="{{ Route::currentRouteName() == 'article' ? 'active' : '' }}"><a href="{{ route('article') }}">Artikel</a></li>
				<li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Kontak</a></li>
			</ul>
		</nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

    @yield('content')

    <footer id="footer">
        <!-- Footer Content -->
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Our-Company Associate</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing: You must keep the author's name and the link intact. -->
                Designed by <a href="https://bootstrapmade.com/free-one-page-bootstrap-template/">BootstrapMade.com</a>
            </div>
        </div>
    </footer>
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/flickity.js/flickity.pkgd.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>