@extends('layouts.app')

@section('content')
<section class="section-title">
    <h1><i class="icofont-building-alt"></i></h1>
    <h3>Artikel</h3>    
</section>

<main>
    <section class="content-page">
        <div class="grid-container">
        @foreach($articles as $article)
            <div class="grid-item">
                <h1 class="title">{{ $article['title'] }}</h1>
                <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}">
                <p>{{ $article['description'] }}</p>
            </div>
        @endforeach
        </div>
    </section>
</main>


@endsection