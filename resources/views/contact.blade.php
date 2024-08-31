@extends('layouts.app') @section('content')
<style>
	.with-background {
		background-image: url("{{ asset("assets/img/bg_section.webp") }}");
		background-size: cover;
		background-position: center;
		background-blend-mode: multiply;
	}

	.whatsapp {
		font-size: 24px; /* Adjust the size as needed */
		color: #25d366;
		margin-top: 10px; /* Optional: WhatsApp's official green color */
	}

	.whatsapp .wa-text {
		color: yellow; /* Set the text color to yellow */
		font-size: 18px; /* Adjust the text size if needed */
		margin-left: 8px; /* Optional: Add some space between the icon and the text */
	}
</style>
<section class="section-title content-title with-background">
	<h1><i class="icofont-building-alt"></i></h1>
	<h3>Top Managerial</h3>
</section>

<main>
	<section class="content-page">
		<div class="grid-container">
			@foreach($managers as $manager)
			<div class="grid-item-link">
				<div class="grid-item border-gold">
					<!-- <h1 class="title">{{ $manager["name"] }}</h1> -->
					<img
						src="{{ asset($manager['image']) }}"
						alt="{{ $manager['name'] }}" />
					<!-- <p style="margin-top:10px;">{{ $manager["position"] }}</p> -->
					<a
						href="https://wa.me/{{ $manager['wa'] }}"
						class="whatsapp"
						target="_blank">
						<i class="icofont-whatsapp">
							<span class="wa-text">{{ $manager["wa"] }}</span></i
						>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</section>
</main>

@endsection
