<section class="customer-stories-section">
    <div class="container">
        
        {{-- Header Section --}}
        <div class="stories-header">
            <h2 class="stories-title">Customer Stories</h2>
            <p class="stories-description">
                Dipercaya oleh lebih dari 2000 perusahaan, SunFish HR membantu bisnis dari berbagai skala dan industri 
                di Asia Tenggara dengan solusi HRIS dan HCM yang terbukti memberikan hasil nyata. Simak 
                bagaimana perusahaan-perusahaan ini bertransformasi bersama kami.
            </p>
        </div>

        {{-- Main Testimonial Card --}}
        <div class="main-testimonial-card">
            <p class="company-logo-text">potato head bali</p>
            <div class="quote-content">
                <p class="quote-text">
                    "Sejak menggunakan SunFish, kami melihat peningkatan signifikan dalam praktik HR, 
                    menjadikannya alat yang sangat berharga bagi aktivitas sehari-hari."
                </p>
                <p class="quote-author">
                    Desa Potato Head Bali
                </p>
            </div>
            <a href="#" class="read-more-link">Lihat cerita klien kami →</a>
        </div>
        
        {{-- Story Cards Grid --}}
        <div class="story-cards-grid">
            @php
                $mini_stories = [
                    ['title' => 'Transformasi HR Dharma Polimetal Bersama SunFish HR', 'image' => 'customer-stories-1.webp'],
                    ['title' => 'Transformasi HR KDC, Dari Efisiensi Menuju Inovasi', 'image' => 'customer-stories-2.webp'],
                    ['title' => 'Perjalanan Transformasi HR PT. Technics Indonesia', 'image' => 'customer-stories-3.webp'],
                ];
            @endphp

            @foreach ($mini_stories as $story)
                <div class="story-card">
                    {{-- Ganti dengan tag <img src="..."> yang sebenarnya --}}
                    <div class="story-image-placeholder" style="background-image: url('{{ asset('images/' . $story['image']) }}');">
                        <span class="story-tag">SUCCESS STORY</span>
                    </div>
                    <p class="story-card-title">{{ $story['title'] }}</p>
                    <a href="#" class="read-more-card-link">Read full stories →</a>
                </div>
            @endforeach
        </div>

    </div>
</section>