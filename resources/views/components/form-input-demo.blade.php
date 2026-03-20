<section class="demo-section">
    <div class="container-stories-form">
        <div class="container-stories">
            <div class="container-stories-title">
                <h2 class="stories-title">Let's Discuss Your HR Needs!</h2>
                <p class="stories-text">
                    Send us a message! Our team will contact you and respond to your inquiries.
                </p>
            </div>
            <div class="cta-card">
                <img src="{{ asset('images/logo-company-1.webp') }}" alt="HR Dashboard Mockup" class="cta-mockup-image">
                <p class="cta-text">“In summary, we are extremely satisfied with the software and service provided by SunFish and DataOn. The software has comprehensive features, user-friendly interface, robust reporting and analytics, exceptional customer support, and seamless integration. It has revolutionised our PX operations and undoubtedly has become an indispensable asset in optimising our company, definitely the PX strategies and driving overall organisational success.”</p>
                <h3 class="stories-company-name">BMW Performance Motor Indonesia</h2>
                <a href="#contact" class="btn-cta">See the stories &rarr;</a>
            </div>
        </div>
        
        <div class="frame-forminputcta">
            <div class="form-input-cta">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name" id="full_name" placeholder="John Doe" required>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="name@org.com" required>
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" placeholder="083844950493" required>
                <label for="company_name">Company Name</label>
                <input type="text" name="company_name" id="company_name" placeholder="PT Steel Control" required>
                <label for="number_of_employees">Number of Employees</label>
                <select id="number_of_employees" name="number_of_employees" id="number_of_employees" required>
                    <option value="" disabled selected hidden>Number of Employees</option>
                    <option value="10-100">10-100</option>
                    <option value="101-500">100-500</option>
                    <option value="500-1000">500-1000</option>
                    <option value="1000-2500">1000-2500</option>
                    <option value="2500-5000">2500-5000</option>
                    <option value="5000-10000">5000-10000</option>
                    <option value="10000+">10000+</option>
                </select>
                <label for="service_of_interest">Service of Interest</label>
                <select id="service_of_interest" name="service_of_interest" id="service_of_interest" required>
                    <option value="" disabled selected hidden>Select services of interest</option>
                    <option value="sunfishhris">SunFish HRIS</option>
                    <option value="payrolloutsourcing">Payroll Outsourcing</option>
                    <option value="multicountrypayrolloutsourcing">Multicountry Payroll Outsourcing</option>
                    <option value="erpsolutions">ERP Solutions</option>
                    <option value="other">Other</option>
                </select>
                <label class="checkbox-label">
                    <input type="checkbox" name="responsible" value="responsible" id="responsible" required>
                    <span>I'm responsible for booking a demo</span>
                </label>

                <div class="btn-container">
                    <button class="book-demo-btn-cta" id="book-demo-btn-cta" disabled>Book a Demo</button>
                </div>
                <p>By clicking the “Book a demo” button, I agree to DataOn’s 
                    <a class="privacypolicy" href="#">privacy policy</a>
                </p>
            </div>
        </div>
    </div>
</section>