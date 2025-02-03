@extends('layouts.app') @section('content')
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
	<h3>Promo</h3>
</section>

<main>
	<section class="content-page">
		<div class="grid-container">
			@foreach($promos as $promo)
			<a class="grid-item-link">
				<div class="grid-item border-gold">
					<h1 class="title">{{ $promo["title"] }}</h1>
					<img
						src="{{ asset($promo['image']) }}"
						alt="{{ $promo['title'] }}" />
					<p style="margin-top:10px;">{{ $promo["description"] }}</p>
				</div>
			</a>
			@endforeach
		</div>
	</section>
</main>

@endsection
