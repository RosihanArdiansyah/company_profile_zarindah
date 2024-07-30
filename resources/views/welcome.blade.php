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
              Specialist in financial services software solutions to help financial services providers unlock
              business growth and digital transformation through innovation and technology.
            </p>
            <p>
              Our-Compnay focuses on delivering relevant, agile yet simple technological solutions
              for financial services providers in the emerging markets. Our solutions give a better user
              interface to wealth managers, fund managers, insurance brokers /companies and other financial
              services providers with minimum costs.
            </p>
            <p>
              As a simple rule, we do not aim to be the most dominant software provider in our space, but we
              aim to be the best in the niche that we serve.
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
                  <h1 class="price">{{ $product['price'] }}</h1>
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
        <div class="product-carousel">
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
              <div class="social-links">
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
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

          <div class="col-lg-5 col-md-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
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