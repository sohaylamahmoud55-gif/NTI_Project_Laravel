@extends('layouts.app')
@section('content')
<section class="page-header">
    <div class="container text-center">
        <h1>Checkout</h1>
        <p>
            Review your order and complete your purchase securely.
        </p>
    </div>
</section>
<section class="checkout-page py-5 mt-5">
    <div class="container">
        <div class="row">

            <!-- Billing -->
            <div class="col-lg-7">
                <div class="card shadow-sm p-4 border-0">
                    <h4 class="mb-4">Billing Details</h4>
                    <form action="{{ route('checkout.place') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Enter phone number">
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="Enter city">
                            @error('city')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea
                                name="address"
                                class="form-control"
                                rows="4">
                            {{ old('address') }}
                            </textarea>
                            @error('address')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Payment Method</label>
                            <select name="payment_method" class="form-select">
                                <option value="">Choose Payment Method</option>

                                <option value="Cash On Delivery"
                                    {{ old('payment_method') == 'Cash On Delivery' ? 'selected' : '' }}>
                                    Cash On Delivery
                                </option>

                                <option value="Visa"
                                    {{ old('payment_method') == 'Visa' ? 'selected' : '' }}>
                                    Visa
                                </option>
                            </select>
                            @error('payment_method')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <!-- <div class="mb-4">
                            <label class="form-label">Payment Method</label>
                            <select class="form-select">
                                <option>Cash On Delivery</option>
                                <option>Visa</option>
                            </select>
                        </div> -->
                        <button class="btn btn-success w-100 mt-4">Place Order</button>
                    </form>
                </div>
            </div>

            <!-- Summary -->
            <div class="col-lg-5">
                <div class="card shadow-sm p-4 border-0">
                    <h4 class="mb-4">Order Summary</h4>
                    @foreach($cart->items as $item)
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <strong>
                                {{ $item->product->name }}
                            </strong>
                            <br>
                            x{{ $item->quantity }}
                        </div>
                        <span>
                            EGP
                            {{ $item->product->price * $item->quantity }}
                        </span>
                    </div>
                    @endforeach
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5>Total</h5>
                        <h5>EGP {{ $total }}</h5>
                    </div>
                    <!-- <button class="btn btn-success w-100 mt-4">Place Order</button> -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection