@extends('gust.layout')

@section('title', 'About Us')

@section('content')


<style>
body {
    background: #F9FAFB; /* clean background */
    color: #333;
    font-family: 'Segoe UI', sans-serif;
}

.about-section {
    background: #ffffff;
    border-radius: 1.5rem;
    padding: 2.5rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    border-left: 6px solid #FF9800; /* Accent border */
    animation: fadeInUp 1s ease-in-out;
}

.about-section h1 {
    font-weight: 700;
    color: #1C2331;
    border-bottom: 2px solid #eee;
    padding-bottom: 0.5rem;
}

.about-section p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #37474F;
    margin-bottom: 1rem;
}

.about-section ul {
    list-style: none;
    padding-left: 0;
    margin-top: 1.2rem;
}

.about-section ul li {
    padding-left: 2rem;
    position: relative;
    margin-bottom: 0.9rem;
    font-size: 1.05rem;
    color: #388E3C;
    font-weight: 500;
}

.about-section ul li::before {
    content: "\f26e"; /* check-circle-fill */
    font-family: "Bootstrap-icons";
    position: absolute;
    left: 0;
    color: #FF9800;
    font-size: 1.2rem;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
<div class="container py-5">
    <div class="about-section">
        <h1 class="mb-4"><i class="bi bi-info-circle me-2"></i>About Us</h1>
        <p>Welcome to <strong>MyShop</strong>, your trusted online store for quality products. We are committed to delivering the best shopping experience with a wide variety of items at competitive prices.</p>

        <p>Founded in 2025, MyShop has grown from a small local store to a popular online destination for shoppers all across the country. Our focus is on quality, customer satisfaction, and prompt delivery.</p>

        <p>We believe in building lasting relationships with our customers, and we’re always here to help with any queries or support you need.</p>

        <h4 class="mt-5"><i class="bi bi-star-fill me-2 text-warning"></i>Why Choose Us?</h4>
        <ul class="mt-3">
            <li>High-quality products</li>
            <li>Secure online shopping</li>
            <li>Fast and reliable delivery</li>
            <li>24/7 customer support</li>
        </ul>
    </div>
</div>

@endsection
