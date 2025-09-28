<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MyShop')</title>

    <!-- ✅ Bootstrap CSS & Icons -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <style>
        /* Header & Footer (Same Gradient) */
        .navbar,
        footer {
            background: linear-gradient(90deg, #6A11CB, #2575FC);
            /* Purple → Blue */
            color: #fff;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
        }

        /* Navbar brand */
        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
            color: #fff !important;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        /* Navbar links */
        .nav-link {
            font-weight: 500;
            color: #f1f1f1 !important;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            color: #FFD700 !important;
            /* Gold hover */
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(45deg, #FF9800, #FFC107);
            /* Orange → Yellow */
            border: none;
            border-radius: 8px;
            color: #fff;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #e68900, #ffb300);
        }

        /* Footer Text & Links */
        footer h5 {
            font-weight: bold;
            margin-bottom: 1rem;
            color: #FFD700;
            /* Gold headings */
        }

        footer a {
            color: #f1f1f1;
            transition: 0.3s ease;
        }

        footer a:hover {
            color: #FFEB3B !important;
            /* Bright yellow on hover */
        }

        /* Account Button */
        #accountDropdown {
            border: 2px solid #FFD700;
            /* Gold border */
            color: #fff !important;
            /* White text */
            font-weight: 500;
            border-radius: 8px;
            padding: 6px 14px;
            transition: 0.3s ease;
        }

        #accountDropdown:hover {
            background: #FFD700;
            /* Gold hover */
            color: #000 !important;
            /* Black text on hover */
        }
    </style>

</head>

<body>

    <!-- ✅ Navbar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-bag-heart-fill me-1"></i> MyShop
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-2">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="bi bi-house-door-fill me-1"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/products" class="nav-link">
                            <i class="bi bi-box-seam me-1"></i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">
                            <i class="bi bi-info-circle-fill me-1"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">
                            <i class="bi bi-telephone-fill me-1"></i> Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/cart" class="nav-link">
                            <i class="bi bi-cart-fill me-1"></i> Cart
                        </a>
                    </li>

                    <li>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" name="query" placeholder="Search..." aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </li>

                    <!-- ✅ Account Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-secondary dropdown-toggle ms-2" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i> Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                            <li><a class="dropdown-item" href="/register">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ✅ Main Content -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- ✅ Footer -->
    <footer class="pt-4 pb-3 mt-5">
        <div class="container">
            <div class="row">

                <!-- About -->
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">About Us</h5>
                    <p style="font-size: 14px;">
                        We are a leading e-commerce platform providing top quality products and customer service.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="/about" class="text-white text-decoration-none">About</a></li>
                        <li><a href="/contact" class="text-white text-decoration-none">Contact</a></li>
                        <li><a href="/register" class="text-white text-decoration-none">Register</a></li>
                        <li><a href="/cart" class="text-white text-decoration-none">Cart</a></li>
                    </ul>
                </div>

                <!-- Social -->
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Follow Us</h5>
                    <a href="#" class="text-white me-3 fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3 fs-5"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-3 fs-5"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white fs-5"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center border-top pt-3 mt-3" style="font-size: 14px;">
                &copy; 2025 MyShop. All Rights Reserved.
            </div>
        </div>
    </footer>

</body>

</html>