@extends('layouts.app') @section('content')
<section class="section-title content-title">
	<h1><i class="icofont-building-alt"></i></h1>
	<h3>{{ $article['title'] }}</h3>
</section>

<main>
	<section class="content-page" style="padding: 60px;">
		<div class="container mt-5">
		<div class="card custom-card mb-4">
				<div class="card-body text-center">
					<img
						src="{{ asset($article['image']) }}"
						alt="{{ $article['title'] }}" />
				</div>
			</div>
			<div class="card custom-card mb-4">
				<div class="card-body">
					<p class="card-text">{{ $article['description'] }}</p>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection
