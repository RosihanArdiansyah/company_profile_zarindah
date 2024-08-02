@extends('layouts.app')

@section('content')
<section class="section-title content-title">
    <h1><i class="icofont-building-alt"></i></h1>
    <h3>Nama Produk</h3>    
</section>

<main>
    <section class="content-page">
        <div class="grid-container">
        @foreach($products as $product)
            <div class="grid-item">
                <h1 class="title">{{ $product['title'] }}</h1>
                <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}">
                <p>{{ $product['description'] }}</p>
            </div>
        @endforeach
        </div>
    </section>
</main>


@endsection