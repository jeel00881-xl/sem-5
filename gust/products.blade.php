@extends('gust.layout')

@section('title', 'Products')

@section('content')

<style>
  body {
    background: #F9FAFB; /* Clean background */
    color: #212121;
    font-family: 'Segoe UI', sans-serif;
}

/* Quantity Input */
#quantity {
    background-color: #ffffff;
    border: 2px solid #1976D2;  /* Royal Blue */
    color: #0D47A1;
    font-weight: bold;
    border-radius: 8px;
    padding: 8px 12px;
    width: 100px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
#quantity:focus {
    outline: none;
    border-color: #0D47A1;
    box-shadow: 0 0 8px rgba(25, 118, 210, 0.5);
}

/* Product Cards */
.card {
    background-color: #fff;
    border-radius: 12px;
    border: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.06);
}
.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.card-title {
    color: #212121;
    font-weight: 600;
}
.card-text {
    color: #607d8b;
}

/* Buttons */
.btn-outline-primary {
    color: #FF9800;
    border-color: #FF9800;
    font-weight: 500;
    border-radius: 6px;
    transition: all 0.3s ease;
}
.btn-outline-primary:hover {
    background-color: #FF9800;
    color: #fff;
    border-color: #FF9800;
    box-shadow: 0 4px 12px rgba(255, 152, 0, 0.3);
}

/* Price */
.fw-bold.text-success {
    color: #388E3C !important;
}

</style>
<div class="container py-5">
    <h1 class="mb-4 text-primary fw-bold">Our Products</h1>
    
    <div class="row">
        <!-- Product Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/a.jpg') }}" class="card-img-top" alt="Red T-Shirt">
                <div class="card-body">
                    <h5 class="card-title">Red T-Shirt</h5>
                    <p class="card-text text-muted">Comfortable cotton t-shirt perfect for everyday wear.</p>
                    <p class="fw-bold text-success">₹499</p>
                    <a href="{{ url('/detli1') }}" class="btn btn-outline-primary">View</a>

                    </a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/pool.jpg') }}" class="card-img-top" alt="Black Shoes">
                <div class="card-body">
                    <h5 class="card-title">Black Shoes</h5>
                    <p class="card-text text-muted">Stylish and durable footwear for any occasion.</p>
                    <p class="fw-bold text-success">₹1299</p>
                    <a href="{{ url('/detli2') }}" class="btn btn-outline-primary">View</a>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/athleisure.jpg') }}" class="card-img-top" alt="Black Shoes">
                <div class="card-body">
                    <h5 class="card-title">Black Shoes</h5>
                    <p class="card-text text-muted">Stylish and durable footwear for any occasion.</p>
                    <p class="fw-bold text-success">₹1299</p>
                    <a href="{{ url('/detli3') }}" class="btn btn-outline-primary">View</a>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/b.jpg') }}" class="card-img-top" alt="Black Shoes">
                <div class="card-body">
                    <h5 class="card-title">Black Shoes</h5>
                    <p class="card-text text-muted">Stylish and durable footwear for any occasion.</p>
                    <p class="fw-bold text-success">₹1299</p>
                    <a href="{{ url('/detli4') }}" class="btn btn-outline-primary">View</a>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/blue.jpg') }}" class="card-img-top" alt="Black Shoes">
                <div class="card-body">
                    <h5 class="card-title">Black Shoes</h5>
                    <p class="card-text text-muted">Stylish and durable footwear for any occasion.</p>
                    <p class="fw-bold text-success">₹1299</p>
                    <a href="{{ url('/detli5') }}" class="btn btn-outline-primary">View</a>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/c.jpg') }}" class="card-img-top" alt="Black Shoes">
                <div class="card-body">
                    <h5 class="card-title">Black Shoes</h5>
                    <p class="card-text text-muted">Stylish and durable footwear for any occasion.</p>
                    <p class="fw-bold text-success">₹1299</p>
                    <a href="{{ url('/detli6') }}" class="btn btn-outline-primary">View</a>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/d.jpg') }}" class="card-img-top" alt="Black Shoes">
                <div class="card-body">
                    <h5 class="card-title">Black Shoes</h5>
                    <p class="card-text text-muted">Stylish and durable footwear for any occasion.</p>
                    <p class="fw-bold text-success">₹1299</p>
                    <a href="{{ url('/detli7') }}" class="btn btn-outline-primary">View</a>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/zali.jpg') }}" class="card-img-top" alt="Black Shoes">
                <div class="card-body">
                    <h5 class="card-title">Black Shoes</h5>
                    <p class="card-text text-muted">Stylish and durable footwear for any occasion.</p>
                    <p class="fw-bold text-success">₹1299</p>
                    <a href="{{ url('/detli8') }}" class="btn btn-outline-primary">View</a>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm hover-effect">
                <img src="{{ asset('images/pink.jpg') }}" class="card-img-top" alt="Black Shoes">
                <div class="card-body">
                    <h5 class="card-title">Black Shoes</h5>
                    <p class="card-text text-muted">Stylish and durable footwear for any occasion.</p>
                    <p class="fw-bold text-success">₹1299</p>
                    <a href="{{ url('/detli9') }}" class="btn btn-outline-primary">View</a>
                    </a>
                </div>
            </div>
        </div>




        <!-- Add more product cards here using same format -->
    </div>
</div>
@endsection