@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 fw-bold">Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($carts->count() > 0)
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($carts as $item)
                    @php $subtotal = $item->price * $item->quantity; $total += $subtotal; @endphp
                    <tr>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>₹{{ number_format($item->price, 2) }}</td>
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
    @else
        <div class="alert alert-info">Your cart is empty.</div>
        <a href="/products" class="btn btn-primary">Shop Products</a>
    @endif
</div>
@endsection
