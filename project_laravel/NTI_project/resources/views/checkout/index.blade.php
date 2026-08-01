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
                    <form>
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
                            <input type="text" class="form-control" placeholder="Enter phone number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea
                                class="form-control"
                                rows="4">
                            </textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Payment Method</label>
                            <select class="form-select">
                                <option>Cash On Delivery</option>
                                <option>Visa</option>
                            </select>
                        </div>
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
                    <button class="btn btn-success w-100 mt-4">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection