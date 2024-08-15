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
            <h3>ISI</h3>
        </div>
    </section>
</main>


@endsection