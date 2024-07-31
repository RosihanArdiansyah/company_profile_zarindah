<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Our-Company Associate</title>
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

    @yield('header')

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <header id="header" class="fixed-top header">
    <div class="container">

      <div class="logo float-left">

        <!-- <h1 class="text-light"><a href="index.html"><span>Our-Compnay Associate</span></a></h1> -->
        <a href="/"><img src="assets/img/logo_tok.webp" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#product">Produk</a></li>
          <li><a href="#article">Artikel</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="#map">Lokasi</a></li>
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

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>