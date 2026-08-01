@extends('layouts.app')
@section('content')

<section class="cart-page py-5">
    <div class="container">
        <h2 class="mb-4">My Cart</h2>
        @if($cart && $cart->items->count())
        @foreach($cart->items as $item)
        <div class="card cart-card p-3 mb-4">
            <div class="row align-items-center">

                <!-- Product Image -->
                <div class="col-md-2 text-center">
                    <img src="{{ asset($item->product->image) }}" class="img-fluid rounded" alt="{{ $item->product->name }}">
                </div>

                <!-- Product Info -->
                <div class="col-md-6">
                    <h4>{{ $item->product->name }}</h4>
                    <p class="mb-1">
                        EGP {{ $item->product->price }}
                    </p>
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">

                    <!-- Quantity -->
                    <div class="d-flex align-items-center mb-3">
                        <h3 class="m-3"> Quantity </h3>
                        <form action="{{ route('cart.decrease',$item->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="quantity-btn">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </form>
                        <span class="mx-3 fw-bold fs-5">
                            {{ $item->quantity }}
                        </span>
                        <form action="{{ route('cart.increase',$item->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="quantity-btn">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Remove -->
                    <form action="{{ route('cart.remove',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn remove-btn">
                            <i class="fa-solid fa-trash"></i>
                            Remove
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('checkout') }}" class="btn btn-success px-5 py-2">
                <i class="fa-solid fa-credit-card me-2"></i>
                Checkout
            </a>
        </div>
        @else
        <h4 class="text-center mt-5">Your cart is empty.</h4>
        @endif
    </div>
</section>
@endsection