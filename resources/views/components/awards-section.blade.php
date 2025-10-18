<section class="award-section">
    <div class="container">
        <div class="award-content">
            <h2 class="award-title">Our Awards & Certifications</h2>
            <p class="award-description">
                At DataOn, we're committed to excellence in both innovation and security. Over the
                years, our solutions have been recognized with leading industry awards while also
                meeting internationally recognized data protection and compliance standards.
                Together, these reflect our dedication to delivering trusted, world-class HR
                technology.
            </p>
            <a href="#" class="award-button">
                See all our Awards and Certifications
                <span class="arrow">&rarr;</span>
            </a>
        </div>

        <div class="award-carousel-container">
            {{-- Kontainer yang menampung kartu untuk di-slide --}}
            <div class="award-carousel-track" id="awardCarouselTrack">
                
                {{-- Card 1: TOP Digital Awards 2024 (Active by default) --}}
                <div class="award-card active">
                    <div class="award-logo-wrapper">
                        <img src="{{ asset('images/awards1.jpg') }}" alt="TOP Digital Awards 2024 Logo" class="award-logo">
                    </div>
                    <h3 class="card-title">It Works TOP Digital Awards 2024</h3>
                    <p class="card-text">
                        DataOn won several It Works awards 3 years in a row, including: the Top Golden Trophy, the Digital
                        Implementation Award with 5 Stars (Excellent) & the Top HC/HR Solution Award.
                    </p>
                </div>

                {{-- Card 2: Example Certification/Award --}}
                <div class="award-card">
                    <div class="award-logo-wrapper">
                        <img src="{{ asset('images/awards2.jpg') }}" alt="Data Protection Logo" class="award-logo">
                    </div>
                    <h3 class="card-title">ISO 27001 Certification</h3>
                    <p class="card-text">
                        We are proud to hold the ISO 27001 certification, demonstrating our commitment to maintaining the highest
                        standards of information security management systems (ISMS).
                    </p>
                </div>

            </div>
            
            {{-- Indikator Carousel --}}
            <div class="carousel-indicators" id="carouselIndicators">
                <span class="indicator active" data-slide-to="0"></span>
                <span class="indicator" data-slide-to="1"></span>
                <span class="indicator" data-slide-to="2"></span>
            </div>
        </div>
    </div>
</section>

{{-- Fungsionalitas JavaScript (Pastikan ini dimuat setelah semua HTML) --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('awardCarouselTrack');
        const cards = track.querySelectorAll('.award-card');
        const indicatorsContainer = document.getElementById('carouselIndicators');
        const indicators = indicatorsContainer.querySelectorAll('.indicator');
        let currentIndex = 0;
        let autoSlideInterval;
        
        if (cards.length === 0) return;

        function showSlide(index) {
            // Logika untuk loop
            if (index >= cards.length) {
                index = 0;
            } else if (index < 0) {
                index = cards.length - 1;
            }
            
            // Nonaktifkan semua kartu dan indikator
            cards.forEach(card => card.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));

            // Aktifkan kartu dan indikator yang sesuai
            cards[index].classList.add('active');
            indicators[index].classList.add('active');
            currentIndex = index;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        // Event listener untuk indikator
        indicators.forEach(indicator => {
            indicator.addEventListener('click', function() {
                const slideTo = parseInt(this.getAttribute('data-slide-to'));
                showSlide(slideTo);
                
                // Reset interval saat user mengklik
                clearInterval(autoSlideInterval); 
                autoSlideInterval = setInterval(nextSlide, 5000); 
            });
        });

        // Autoplay: Atur interval untuk berpindah slide (setiap 5 detik)
        autoSlideInterval = setInterval(nextSlide, 5000);

        // Inisialisasi
        showSlide(currentIndex);
    });
</script>