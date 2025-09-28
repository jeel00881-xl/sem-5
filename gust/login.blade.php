@extends('gust.layout')

@section('title', 'Login')

@section('content')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

<style>
    body {
    background: linear-gradient(to right, #e3f2fd, #f9f9f9);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.login-container {
    margin-top: 80px;
}

.card {
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    overflow: hidden;
}

.card-header {
    background: linear-gradient(to right, #1976D2, #42A5F5);
    color: white;
    font-size: 1.5rem;
    text-align: center;
    padding: 20px;
    font-weight: 600;
}

.card-body {
    padding: 30px;
    background-color: #fff;
}

.form-label {
    color: #37474F;
    font-weight: 600;
}

.form-control {
    border-radius: 8px;
    border: 1px solid #ced4da;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
    border-color: #1976D2;
    box-shadow: 0 0 0 0.2rem rgba(25, 118, 210, 0.3);
}

.btn-primary {
    background-color: #1976D2;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease-in-out;
}

.btn-primary:hover {
    background-color: #FF9800; /* premium contrast hover */
    box-shadow: 0 6px 15px rgba(255, 152, 0, 0.3);
}

.text-link {
    color: #1976D2;
    font-weight: 500;
    transition: color 0.3s ease;
}

.text-link:hover {
    color: #FF9800;
    text-decoration: underline;
}

</style>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    <i class="bi bi-person-circle me-2"></i>Login to Your Account
                </div>
                <div class="card-body">
                    <form method="POST" action="#" id="loginForm" novalidate>
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">Please enter a valid email.</div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required minlength="8">
                            <div class="invalid-feedback">Password must be at least 8 characters.</div>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <span>Don't have an account?</span>
                        <a href="{{ url('/register') }}" class="text-link">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for validation -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('loginForm');
        form.addEventListener('submit', function (e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                form.classList.add('was-validated');
            }
        });
    });
</script>
@endsection
