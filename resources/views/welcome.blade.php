<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Our-Company Associate</title>
  <meta name="author" content="Rosihan">

  <!-- Favicons -->


  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
  <link rel="manifest" href="/favicon/site.webmanifest">
  <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">



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

  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/free.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/brand.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/flag.min.css">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <style type="text/css">

  </style>
</head>

<body>

  <header id="header" class="fixed-top">
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

  <!-- ======= Hero Section ======= -->
  <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($promo as $index => $item)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $item['active'] ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
          @foreach($promo as $item)
              @php
                  $activeClass = $item['active'] ? 'active' : '';
                  $backgroundImage = asset($item['image']);
              @endphp
              <div class="carousel-item {{ $activeClass }}" style="background-image: url('{{ $backgroundImage }}')">
                  <div class="carousel-caption">
                      <h2 class="display-4">{{ $item['title'] }}</h2>
                      <p class="lead">{{ $item['description'] }}</p>
                  </div>
              </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  </section><!-- #hero -->


  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/Fapas.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h3>What we do</h3>
            <p class="">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Products Section ======= -->

    <section id="product" class="product">
      <div class="container text-center">
        <h1 class="title text-white">Product</h1>
        <div class="product-carousel">
          @foreach($products as $product)
            <div class="box-product carousel-cell">
              <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}">
              <div class="area-product">
                  <h1 class="product-title text-white">{{ $product['title'] }}</h1>
                  <p>{{ $product['description'] }}</p>
                  <button type="button" class="btn btn-info btn-sm">Detail</button>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Products Section -->

    <!-- ======= Article Section ======= -->
    <section id="article" class="article">
      <div class="container text-center">
        <h1 class="title text-black">Artikel</h1>
        <div class="items-carousel">
          @foreach($products as $product)
            <div class="box-product carousel-cell article-carousel" style="background-image: url('{{ asset($product['image']) }}')">
              <h1 class="article-title text-white">{{ $product['title'] }}</h1>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Article Section -->
    
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="contact-about">
              <h3>Our-Compnay</h3>
              <p>Delivering relevant technologies for our times</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="contact-about">
              <h3>Social-Links</h3>
              <div class="social-links">
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info">
              <div>
                <i class="icofont-google-map"></i>
                <p>Velile Estate, 123 Vamba Rd, Johannesburg, Gauteng, 2000</p>
              </div>

              <div>
                <i class="icofont-envelope"></i>
                <p>clients@Our-Compnay.com </p>
              </div>


            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Contact Us Section -->

    <!-- ======= Map Section ======= -->
    <section id="map" class="map">
      <iframe
        src="https://maps.google.com/maps?q=Government%20Ave,%20Pretoria,%200002&t=&z=13&ie=UTF8&iwloc=&output=embed"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Our-Compnay</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/flickity.js/flickity.pkgd.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>