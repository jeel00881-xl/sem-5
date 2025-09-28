@extends('gust.layout')

@section('title', 'Your Cart')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 fw-bold">Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($cartItems->count() > 0)
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cartItems as $item)
                    @php 
                        $subtotal = $item->product->price * $item->quantity;
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>
                            <img src="{{ asset('images/' . $item->product->image) }}" alt="{{ $item->product->name }}" width="60" class="me-2 rounded shadow-sm">
                            {{ $item->product->name }}
                        </td>
                        <td>{{ $item->quantity }}</td>
                        <td>₹{{ number_format($item->product->price, 2) }}</td>
                        <td>₹{{ number_format($subtotal, 2) }}</td>
                        <td>
                            <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-end fw-bold">Total:</td>
                    <td colspan="2" class="fw-bold text-success">₹{{ number_format($total, 2) }}</td>
                </tr>
            </tfoot>
        </table>
        <a href="#" class="btn btn-success">Proceed to Checkout</a>
    @else
        <div class="alert alert-info">Your cart is empty.</div>
        <a href="/products" class="btn btn-primary">Shop Products</a>
    @endif
</div>
@endsection
