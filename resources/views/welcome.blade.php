@extends('layouts.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach($promo as $index => $item)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}"
        class="{{ $item['active'] ? 'active' : '' }}"></li>
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
          <h2 class="display-4 font-weight-bold">{{ $item['title'] }}</h2>
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

      <div class="section-title font-weight-bold">
        <h1>Kenapa Zarindah</h1>
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/Fapas.png" class="img-fluid" alt="">
        </div>
        <!-- <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
          <h3>Why us</h3>
          <p class="">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
            dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
            sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
            magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
            suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in
            ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas
            nulla pariatur?
          </p>
        </div> -->
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
          <div class="card about-card">
            <h4 class="card-title">Full Security System</h4>
            <p class="card-text">Zarindah Group menawarkan jaminan keamanan selama 24 jam, 7 hari seminggu, dengan sistem keamanan penuh yang menjaga keselamatan dan ketenangan hati setiap penghuni.</p>
          </div>
          <div class="card about-card">
            <h4 class="card-title">One-Gate System</h4>
            <p class="card-text">Dilengkapi dengan gerbang tersendiri, sistem one-gate ini menambah privasi dan keamanan bagi penghuni, memastikan bahwa hanya penghuni dan tamu yang diizinkan yang dapat memasuki area perumahan.</p>
          </div>
          <div class="card about-card">
            <h4 class="card-title">Facilities</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item about-list-item"><strong>Taman Bermain Anak:</strong> Fasilitas taman bermain yang aman dan menyenangkan untuk anak-anak, memberikan tempat yang ideal untuk bermain dan bersosialisasi.</li>
              <li class="list-group-item about-list-item"><strong>Lapangan Olahraga:</strong> Beragam lapangan olahraga seperti basket dan futsal, yang memberikan fasilitas olahraga dan rekreasi bagi penghuni dari segala usia.</li>
              <li class="list-group-item about-list-item"><strong>Jogging Track:</strong> Jalur jogging yang indah dan terawat, ideal untuk berolahraga pagi atau sore, membantu penghuni menjaga gaya hidup sehat.</li>
              <li class="list-group-item about-list-item"><strong>Masjid:</strong> Fasilitas masjid yang nyaman dan bersih, menyediakan tempat beribadah yang mudah diakses bagi penghuni Muslim.</li>
            </ul>
          </div>
      </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Products Section ======= -->

  <section id="product" class="product">
    <div class="container text-center">
      <h1 class="title font-weight-bold">Product</h1>
      <div class="product-carousel">
        @foreach($products as $product)
        <div class="box-product carousel-cell">
          <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}">
          <div class="area-product">
            <h1 class="product-title text-white">{{ $product['title'] }}</h1>
            <p>{{ $product['description'] }}</p>
            <button type="button" class="btn btn-info btn-sm"
              onclick="window.location.href='{{ route('product', ['slug' => $product['slug']]) }}'">Detail</button>
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
      <h1 class="title font-weight-bold">Artikel</h1>
      <div class="items-carousel">
        @foreach($articles as $article)
          @php
            $articleImage = asset($article['image']);
          @endphp
        <a href="{{ route('article.content', ['slug' => $article['slug']]) }}" class="box-product carousel-cell article-carousel"
          style="background-image: url('{{ $articleImage }}')">
          <div class="overlay">
            <h1 class="article-title text-white">{{ $article['title'] }}</h1>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </section>

  <!-- End Article Section -->



  <!-- ======= Map Section ======= -->
  <section id="map" class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section><!-- End Map Section -->

</main><!-- End #main -->

@endsection