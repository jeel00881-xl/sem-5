@extends('gust.layout')

@section('title', 'Home')

@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

<style>
    body {
        background: #F9FAFB;
        /* Clean ecommerce bg */
        color: #333;
        font-family: 'Segoe UI', sans-serif;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #1976D2, #0D47A1);
        /* Royal Blue */
        color: #ffffff;
        padding: 5rem 1rem;
        border-radius: 0 0 2rem 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    }

    /* Buttons */
    .btn-primary {
        background-color: #FF9800;
        border-color: #FF9800;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #e68900;
        border-color: #e68900;
        box-shadow: 0 0 15px rgba(255, 152, 0, 0.5);
    }

    /* Hover effect for cards */
    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 1rem;
    }

    .hover-effect:hover {
        transform: translateY(-8px);
        box-shadow: 0 1.5rem 2rem rgba(0, 0, 0, 0.12);
    }

    /* Feature Icons */
    .feature-icon {
        font-size: 3rem;
        padding: 1.2rem;
        border-radius: 50%;
        display: inline-block;
        background-color: #E3F2FD;
        /* light blue bg */
        color: #1976D2;
        /* blue icons */
    }

    /* Individual custom icon colors */
    .feature-icon.fast {
        color: #1976D2;
    }

    /* Blue for Delivery */
    .feature-icon.quality {
        color: #FF9800;
    }

    /* Orange for Quality */
    .feature-icon.support {
        color: #4CAF50;
    }

    /* Green for Support */

    /* Card Text */
    .card-title {
        font-size: 1.3rem;
        color: #1e272e;
        font-weight: 600;
    }

    .card-text {
        color: #57606f;
    }
</style>

<!-- Hero Section -->
<div class="text-center hero-section animate__animated animate__fadeIn">
    <h1 class="display-4 fw-bold">Welcome to MyShop</h1>
    <p class="lead text-light">Your one-stop destination for top-quality products.</p>
    <a href="/products" class="btn btn-lg btn-primary mt-3 px-4 py-2">
        <i class="bi bi-cart-fill me-2"></i>Shop Now
    </a>
</div>

<!-- Features Section -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="card shadow-sm text-center p-4 border-0 hover-effect">
            <div class="mb-3 feature-icon">
                <i class="bi bi-truck"></i>
            </div>
            <h5 class="card-title">Fast Delivery</h5>
            <p class="card-text">We deliver products quickly and safely to your doorstep.</p>
        </div>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card shadow-sm text-center p-4 border-0 hover-effect">
            <div class="mb-3 feature-icon" style="color:#20c997;">
                <i class="bi bi-award"></i>
            </div>
            <h5 class="card-title">Best Quality</h5>
            <p class="card-text">We ensure the best quality in all our products.</p>
        </div>
    </div>
    <div class="col-md-4 mt-4 mt-md-0">
        <div class="card shadow-sm text-center p-4 border-0 hover-effect">
            <div class="mb-3 feature-icon" style="color:#ff6b81;">
                <i class="bi bi-headset"></i>
            </div>
            <h5 class="card-title">24/7 Support</h5>
            <p class="card-text">Got a question? We’re here to help anytime.</p>
        </div>
    </div>
</div>
@endsection