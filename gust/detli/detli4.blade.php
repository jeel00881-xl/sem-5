@extends('gust.layout')

@section('title', 'Product Detail')

@section('content')

<style>
    body {
    background: linear-gradient(to right, #f8f9fa, #e9ecef); /* Light grey gradient */
    font-family: 'Segoe UI', sans-serif;
    color: #333;
}


/* Product Image */
.product-img {
    border-radius: 1rem;
    box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.25);
    border: 4px solid #fff;
    transition: transform 0.3s ease;
}
.product-img:hover {
    transform: scale(1.03);
}

/* Product Info */
.product-info {
    background: rgba(255, 255, 255, 0.98);
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.15);
}

.product-info h2 {
    font-weight: 700;
    color: #0D47A1;
}

.text-primary {
    color: #FF9800 !important; /* Orange highlight */
    font-weight: bold;
}

/* Buttons */
.btn-primary {
    background-color: #1976D2;
    border-color: #1976D2;
    border-radius: 0.5rem;
    padding: 0.6rem 1.4rem;
    transition: all 0.3s ease;
}
.btn-primary:hover {
    background-color: #FF9800;
    border-color: #FF9800;
    color: #fff;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.2);
}

/* Divider */
hr {
    border-top: 2px dashed #ddd;
}

/* Reviews */
.review-section {
    background-color: #fff;
    padding: 2rem;
    border-radius: 1rem;
    margin-top: 2rem;
    box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1);
}

.review {
    border-bottom: 1px dashed #ccc;
    padding-bottom: 1rem;
    margin-bottom: 1rem;
}

.stars {
    color: #FFD700; /* Gold stars */
    font-size: 1.2rem;
}

</style>

<div class="container py-5">
    <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ asset('images/b.jpg') }}" class="img-fluid product-img" alt="Red T-Shirt">
        </div>

        <!-- Details Section -->
        <div class="col-md-6">
            <div class="product-info">
                <h2>Red T-Shirt</h2>
                <p class="text-muted">Comfortable and breathable cotton t-shirt for everyday use.</p>
                <h4 class="text-primary mb-3">₹499</h4>

                <p><strong>Size:</strong> M, L, XL</p>
                <p><strong>Color:</strong> Red</p>

                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" readonly>
                    </div>
                    <a href="{{ url('/login') }}" class="btn btn-primary">
                        <i class="bi bi-cart-plus"></i> Bay Now
                    </a>
                    <a href="{{ url('/login') }}" class="btn btn-primary">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </a>
                </form>

                <hr class="my-4">

                <h5>Description</h5>
                <p>This red t-shirt is made of 100% cotton, offering comfort and durability. Perfect for casual wear.</p>
            </div>
        </div>
    </div>

    <!-- Rating & Review Section -->
    <div class="review-section mt-5">
        <h4>Customer Ratings & Reviews</h4>

        <div class="review">
            <div class="stars">★★★★★</div>
            <p><strong>Rahul Sharma:</strong> Great quality and very comfortable. Totally worth the price!</p>
        </div>

        <div class="review">
            <div class="stars">★★★★☆</div>
            <p><strong>Pooja Mehta:</strong> Color is vibrant and fits perfectly. A bit slow delivery though.</p>
        </div>

        <div class="review">
            <div class="stars">★★★★★</div>
            <p><strong>Amit Verma:</strong> Soft fabric and looks just like the image. Highly recommend it!</p>
        </div>
    </div>
</div>

@endsection
