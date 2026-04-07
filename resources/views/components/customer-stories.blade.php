<section class="customer-stories-section">
    <div class="container">
        
        {{-- Header Section --}}
        <div class="stories-header">
            <h2 class="stories-title">Customer Stories</h2>
            <p class="stories-description">
                Trusted by 2,000+ companies, SunFish supports businesses of all sizes and across all industries with powerful HRIS and HCMS solutions and services built for Southeast Asia. Hear from them how SunFish delivers measurable results
            </p>
        </div>

        {{-- Main Testimonial Card --}}
        <div class="main-testimonial-card">
            <div class="testimonial-logo-company">
                <img src="{{ asset('images/logo_potatoheadbali.webp') }}" alt="Potato Head Bali" class="company-logo-images">
            </div>
            <div class="quote-content">
                <p class="quote-text">
                    "Since incorporating SunFish HR software into our operations, we have witnessed remarkable enhancements in our HR practices, making it an invaluable tool for our day-to-day activities."
                </p>
                <p class="quote-author">
                    Desa Potato Head Bali
                </p>
            </div>
            <a href="#" class="read-more-link">Read our customer stories →</a>
        </div>
        
        {{-- Story Cards Grid --}}
        <div class="story-cards-grid">
            @php
                $mini_stories = [
                    ['title' => 'PT Dharma Polimetal’s HR Transformation Journey', 'image' => 'customer-stories-1.webp'],
                    ['title' => 'Internal Excellence, World-class Service: ITDC’s HR Transformation Journey', 'image' => 'customer-stories-2.webp'],
                    ['title' => 'FL Technics Indonesia’s HR Transformation Journey', 'image' => 'customer-stories-3.webp'],
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