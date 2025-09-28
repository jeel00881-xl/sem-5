@extends('gust.layout')

@section('title', 'Register')

@section('content')
<style>
 body {
    background: linear-gradient(to right, #e3f2fd, #f9f9f9);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.card {
    border-radius: 1.5rem;
    border: none;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.card-header {
    background: linear-gradient(to right, #1976D2, #42A5F5);
    color: #fff !important;
    font-weight: bold;
    text-align: center;
    font-size: 1.3rem;
    border-top-left-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
    padding: 1rem;
}

.form-control {
    border-radius: 8px;
    border: 1px solid #ced4da;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
    border-color: #1976D2;
    box-shadow: 0 0 0 0.2rem rgba(25, 118, 210, 0.25);
}

.btn-primary {
    background-color: #1976D2;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease-in-out;
}

.btn-primary:hover {
    background-color: #FF9800; /* contrast hover */
    box-shadow: 0 6px 15px rgba(255, 152, 0, 0.3);
}

a {
    color: #1976D2;
    font-weight: 500;
    transition: color 0.3s ease;
}

a:hover {
    color: #FF9800;
    text-decoration: underline;
}

</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">Create an Account</div>
                <div class="card-body p-4">
                    <form id="registerForm" novalidate>
                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required pattern="^[A-Za-z\s]+$">
                            <div class="invalid-feedback">Please enter your full name (letters and spaces only).</div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required minlength="8">
                            <div class="invalid-feedback">Password must be at least 8 characters long.</div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                            <div class="invalid-feedback" id="confirmError">Passwords do not match.</div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>

                    <div class="text-center mt-3">
                        Already have an account?
                        <a href="{{ url('/login') }}" class="text-decoration-none">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Client-side validation -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('registerForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');
        const confirmError = document.getElementById('confirmError');

        form.addEventListener('submit', function (e) {
            let isValid = true;

            // Reset previous errors
            confirmPassword.classList.remove('is-invalid');
            confirmError.style.display = 'none';

            // Match passwords
            if (password.value !== confirmPassword.value) {
                confirmPassword.classList.add('is-invalid');
                confirmError.style.display = 'block';
                isValid = false;
            }

            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    });
</script>
@endsection
