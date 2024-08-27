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
</main>


@endsection