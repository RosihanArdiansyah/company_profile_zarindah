@extends('layouts.app')

@section('content')
<section class="section-title content-title">
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
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.704124571309!2d119.43423030000001!3d-5.1512386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b7180ba16b%3A0x74aa4a18594bb776!2sPT.%20Zarindah%20Perdana!5e0!3m2!1sen!2sid!4v1724038715981!5m2!1sen!2sid"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section><!-- End Map Section -->
</main>


@endsection