<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header SunFish</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="top-header">
            <div class="contact-info">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:+6285218584097" class="phone-number phone-number-1">+62-8521-8584-097</a>
                <a href="tel:+622122213077" class="phone-number phone-number-1">+62-2122-2130-77</a>
            </div>

            <div class="vertical-divider"></div>
            
            <div class="dropdown-container">
                <button class="dropdown-toggle">
                    Indonesia (English) &#9662
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Indonesia (English)</a></li>
                    <li><a href="#">English (Global)</a></li>
                    <li><a href="#">Deutsch (German)</a></li>
                </ul>
            </div>
            <div class="contact-us">
                <a href="#">Contact Us</a>
            </div>
        </div>
        <div class="main-header">
            <div class="logo-and-nav">
                <div class="logo">
                    <a href="{{ url('/#') }}">
                        <img src="{{ asset('images/logo-dataon.png') }}" alt="SunFish Logo" class="logo-img">
                    </a>
                </div>

                <ul class="navigation">
                    <li class="has-dropdown">
                        <span>Products</span>
                        <ul class="dropdown">
                            <li><a href="#">HR Core</a></li>
                            <li><a href="#">Enterprise Payroll</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <span>Services</span>
                        <ul class="dropdown">
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Implementations & Customo</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <span>Resources</span>
                        <ul class="dropdown">
                            <li><a href="#">HR Core</a></li>
                            <li><a href="#">Enterprise Payroll</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <span>Customers</span>
                        <ul class="dropdown">
                            <li><a href="#">HR Core</a></li>
                            <li><a href="#">Enterprise Payroll</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <span>Company</span>
                        <ul class="dropdown">
                            <li><a href="#">HR Core</a></li>
                            <li><a href="#">Enterprise Payroll</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <span>Contact Us</span>
                        <ul class="dropdown">
                            <li><a href="#">HR Core</a></li>
                            <li><a href="#">Enterprise Payroll</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <button class="book-demo-btn" onclick="window.location.href = '{{ url('/demo') }}';">
                Book a demo
            </button>

        </div>
    </header>
    </body>
</html>