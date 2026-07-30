@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="page-header text-center">
    <div class="container">
        <h1>Perfume Collection</h1>
        <p>Discover elegant fragrances crafted to leave a lasting impression.</p>
    </div>
</section>

<!-- Products -->
<section class="container py-5">
    <div class="row">
        @foreach($perfumes as $perfume)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="product-card">
                <img src="{{ asset($perfume->image) }}" alt="{{ $perfume->name }}" class="img-fluid">
                <h5>{{ $perfume->name }}</h5>
                <p>{{ $perfume->description }}</p>
                <span class="price">EGP {{ $perfume->price }}</span>
                <br>
                <a href="#" class="btn btn-primary mt-3">View Details</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection