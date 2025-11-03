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
                <input type="checkbox" id="lang-toggle" class="dropdown-checkbox" hidden>
                <label for="lang-toggle" class="dropdown-toggle">
                    Indonesia (English)
                </label>
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
                    <img src="{{ asset('images/logo-dataon.png') }}" alt="SunFish Logo" class="logo-img">
                </div>

                <ul class="navigation">
                    <li class="has-dropdown">
                        <span>Products</span>
                        <div class="submenu mega-submenu"> 
                            <div class="mega-menu-left">
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link active-link">Products</a>
                                </div>
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link">SunFish HR <i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <div class="mega-menu-right">
                                <div class="right-header">SunFish HR</div>
                                <ul class="right-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Vision & Mission</a></li>
                                    <li><a href="#">Award & Certification</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <span>Services</span>
                        <div class="submenu mega-submenu"> 
                            <div class="mega-menu-left">
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link active-link">Our Journey</a>
                                </div>
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link">Whistleblowing <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Governance <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Career <i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <div class="mega-menu-right">
                                <div class="right-header">Our Journey</div>
                                <ul class="right-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Vision & Mission</a></li>
                                    <li><a href="#">Award & Certification</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <span>Resources</span>
                        <div class="submenu mega-submenu"> 
                            <div class="mega-menu-left">
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link active-link">Our Journey</a>
                                </div>
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link">Whistleblowing <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Governance <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Career <i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <div class="mega-menu-right">
                                <div class="right-header">Our Journey</div>
                                <ul class="right-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Vision & Mission</a></li>
                                    <li><a href="#">Award & Certification</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <span>Customers</span>
                        <div class="submenu mega-submenu"> 
                            <div class="mega-menu-left">
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link active-link">Our Journey</a>
                                </div>
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link">Whistleblowing <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Governance <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Career <i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <div class="mega-menu-right">
                                <div class="right-header">Our Journey</div>
                                <ul class="right-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Vision & Mission</a></li>
                                    <li><a href="#">Award & Certification</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <span>Company</span>
                        <div class="submenu mega-submenu"> 
                            <div class="mega-menu-left">
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link active-link">Our Journey</a>
                                </div>
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link">Whistleblowing <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Governance <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Career <i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <div class="mega-menu-right">
                                <div class="right-header">Our Journey</div>
                                <ul class="right-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Vision & Mission</a></li>
                                    <li><a href="#">Award & Certification</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-dropdown">
                        <span>Contact Us</span>
                        <div class="submenu mega-submenu"> 
                            <div class="mega-menu-left">
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link active-link">Our Journey</a>
                                </div>
                                <div class="mega-menu-group">
                                    <a href="#" class="mega-menu-link">Whistleblowing <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Governance <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="mega-menu-link">Career <i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>
                            <div class="mega-menu-right">
                                <div class="right-header">Our Journey</div>
                                <ul class="right-links">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Vision & Mission</a></li>
                                    <li><a href="#">Award & Certification</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- 
            <button class="book-demo-btn">
                Book a demo
            </button>
             --}}

            <button class="book-demo-btn" onclick="window.location.href = '{{ url('/demo') }}';">
                Book a demo
            </button>

        </div>
    </header>
    </body>
</html>