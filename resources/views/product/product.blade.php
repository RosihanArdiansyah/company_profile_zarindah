@extends('layouts.app')

@section('content')

<style>
    .with-background {
        background-image: url('{{ asset('assets/img/bg_section.webp') }}');
        background-size: cover;
        background-position: center;
        background-blend-mode: multiply;
    }
</style>

<section class="section-title content-title with-background">
    <h1><i class="icofont-building-alt"></i></h1>
    <h3>{{ $products['title'] }}</h3>
    <div class="img-container" style="width: 50%; height: 250px;">
        <img src="{{ asset($products['image']) }}" alt="{{ $products['title'] }}" >   
    </div>
</section>

<main >
    <section class="content-page " >
        <div class="grid-container" style="margin-top:100px;">
            <!-- <h3>ISI</h3> -->
            @foreach($products['type'] as $type)
			<div class="grid-item-link">
				<div class="grid-item border-gold">
					<!-- <h1 class="title">{{ $type["name"] }}</h1> -->
					<img
						src="{{ asset($type['image']) }}"
						alt="{{ $type['name'] }}" />
					<p style="margin-top:10px;">{{ $type["name"] }}</p>
                    
				</div>
            </div>
			@endforeach
        </div>
    </section>
    <!-- ======= Map Section ======= -->
  <section id="map" class="map">
    <iframe
      src="{{ $products['map'] }}"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section><!-- End Map Section -->
</main>


@endsection