@extends('gust.layout')

@section('title', 'Contact Us')

@section('content')

<style>
 body {
    background: #F9FAFB; /* clean modern bg */
    color: #333;
    font-family: 'Segoe UI', sans-serif;
}

.contact-section {
    background: #ffffff;
    padding: 2.5rem;
    border-radius: 1rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    border-left: 5px solid #1976D2; /* blue accent border */
    transition: transform 0.3s ease;
}

.contact-section:hover {
    transform: translateY(-4px);
}

.contact-section h1 {
    font-weight: bold;
    color: #1976D2;
}

.contact-section p {
    color: #555;
    font-size: 1rem;
}

.contact-section form .form-control {
    border-radius: 0.5rem;
    border: 1px solid #ddd;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.contact-section form .form-control:focus {
    border-color: #1976D2;
    box-shadow: 0 0 6px rgba(25, 118, 210, 0.4);
}

.contact-section button {
    border-radius: 0.5rem;
    background: #1976D2;
    border: none;
    color: white;
    font-weight: 500;
    transition: background 0.3s ease;
}

.contact-section button:hover {
    background: #FF9800; /* orange hover effect */
}

.contact-section .office-info {
    background-color: #f4f6f9;
    padding: 1.2rem;
    border-radius: 0.75rem;
    margin-top: 2.5rem;
    border-left: 5px solid #FF9800; /* orange accent */
}

.contact-section .office-info h5 {
    font-weight: 600;
    color: #333;
}

.contact-section .office-info p {
    margin-bottom: 0.5rem;
    color: #555;
}

.contact-section .office-info i {
    font-size: 1.1rem;
}
.error {
    color: red;
    font-size: 0.9rem;
}

</style>

<div class="container py-5">
    <div class="contact-section">
        <h1 class="mb-4"><i class="bi bi-envelope-fill me-2 text-primary"></i>Contact Us</h1>

        <p>If you have any questions, feedback, or inquiries, feel free to get in touch with us using the form below.</p>

        <form id="contactForm" onsubmit="return validateForm();">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                <div id="nameError" class="error"></div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                <div id="emailError" class="error"></div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Your Message:</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Write your message here"></textarea>
                <div id="messageError" class="error"></div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="bi bi-send-fill me-1"></i>Send Message</button>
        </form>

        <div class="office-info mt-5">
            <h5><i class="bi bi-geo-alt-fill me-2 text-danger"></i>Our Office</h5>
            <p>123, Market Street</p>
            <p>Ahmedabad, Gujarat - 380001</p>
            <p><i class="bi bi-telephone-fill me-1 text-success"></i> +91 98765 43210</p>
            <p><i class="bi bi-envelope-open-fill me-1 text-warning"></i> support@myshop.com</p>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        let valid = true;

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        document.getElementById('nameError').textContent = "";
        document.getElementById('emailError').textContent = "";
        document.getElementById('messageError').textContent = "";

        // Name validation
        if (name === "") {
            document.getElementById('nameError').textContent = "Please enter your name.";
            valid = false;
        }

        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "") {
            document.getElementById('emailError').textContent = "Please enter your email.";
            valid = false;
        } else if (!emailRegex.test(email)) {
            document.getElementById('emailError').textContent = "Please enter a valid email address.";
            valid = false;
        }

        // Message validation
        if (message === "") {
            document.getElementById('messageError').textContent = "Please enter your message.";
            valid = false;
        }

        return valid;
    }
</script>

@endsection
