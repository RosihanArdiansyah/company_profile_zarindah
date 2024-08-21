@extends('layouts.app') @section('content')
<section class="section-title content-title">
	<h1><i class="icofont-building-alt"></i></h1>
	<h3>Top Managerial</h3>
</section>

<main>
	<section class="content-page">
  <div class="grid-container">
			@foreach($managers as $manager)
			<div class="grid-item-link">
				<div class="grid-item">
					<h1 class="title">{{ $manager["name"] }}</h1>
					<img
						src="{{ asset($manager['image']) }}"
						alt="{{ $manager['name'] }}" />
					<p style="margin-top:10px;">{{ $manager["position"] }}</p>
				</div>
      </div>
			@endforeach
		</div>
	</section>
</main>

@endsection
