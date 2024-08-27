@extends('layouts.app') @section('content')
<section class="section-title content-title">
	<h1><i class="icofont-building-alt"></i></h1>
	<h3>Artikel</h3>
</section>

<main>
	<section class="content-page">
		<div class="grid-container">
			@foreach($articles as $article)
			<a
				href="{{ route('article.content', ['slug' => $article['slug']]) }}"
				class="grid-item-link">
				<div class="grid-item border-gold">
					<h1 class="title">{{ $article["title"] }}</h1>
					<img
						src="{{ asset($article['image']) }}"
						alt="{{ $article['title'] }}" />
					<p style="margin-top:10px;">{{ $article["description"] }}</p>
				</div>
			</a>
			@endforeach
		</div>
	</section>
</main>

@endsection
