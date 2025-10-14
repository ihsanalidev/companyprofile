@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Contact Section -->
    <section class="contact-page">
        <h2>Contact Us</h2>
        <p>Silakan isi form berikut untuk menghubungi kami:</p>

        <form action="#" method="POST" class="contact-form">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>

        <div class="contact-info">
            <p>Email: info@company.com</p>
            <p>Phone: +62 812 3456 7890</p>
            <p>Address: Jl. Contoh Alamat No.123, Jakarta, Indonesia</p>
        </div>
    </section>
@endsection
