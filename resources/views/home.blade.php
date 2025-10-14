@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Product Highlights -->
    <section class="products">
        <h2>Our Solutions</h2>
        <div class="product-cards">
            <div class="card">
                <h3>SunFish HR</h3>
                <p>Solusi manajemen SDM modern untuk perusahaan Anda.</p>
            </div>
            <div class="card">
                <h3>Payroll Management</h3>
                <p>Kelola gaji karyawan secara cepat dan akurat.</p>
            </div>
            <div class="card">
                <h3>Training Management</h3>
                <p>Pelatihan dan pengembangan karyawan menjadi lebih mudah.</p>
            </div>
        </div>
    </section>

    <!-- About Company -->
    <section class="about">
        <h2>About Us</h2>
        <p>Perusahaan kami berfokus pada solusi HR modern untuk membantu bisnis berkembang.</p>
    </section>

    <!-- Call To Action -->
    <section class="cta">
        <a href="/contact" class="btn">Book a Demo</a>
    </section>
@endsection
