<section class="insights-resources-section">
    <div class="container">
        
        {{-- Header Section --}}
        <div class="resources-header">
            <h2 class="resources-title">Insights & Resources</h2>
            <p class="resources-description">
                Selangkah terdepan dengan wawasan dan tren HR, dan panduan praktis yang dapat 
                membantu Anda mengontrol kepuasan manajemen sumber daya operasional, maupun 
                transformasi digital.
            </p>
        </div>

        {{-- Resource Cards Grid --}}
        <div class="resource-cards-grid">
            @php
                $resources = [
                    [
                        'tag' => 'Whitepaper', 
                        'title' => 'Jelajahi beragam eBook berisi wawasan mendalam seputar strategi HR, transformasi digital, dan solusi enterprise.', 
                        'image' => 'blog-1.png'
                    ],
                    [
                        'tag' => 'Blog', 
                        'title' => 'Dapatkan update terbaru seputar tren, tips, dan pemikiran strategis dalam manajemen HR dan teknologi.', 
                        'image' => 'blog-2.webp'
                    ],
                    [
                        'tag' => 'Events', 
                        'title' => 'Ikuti webinar, workshop, dan offline event sebagai media untuk belajar, berjejaring, dan tumbuh bersama komunitas HR.', 
                        'image' => 'blog-3.webp'
                    ],
                ];
            @endphp

            @foreach ($resources as $resource)
                <div class="resource-card">
                    {{-- Card Image --}}
                    <div class="resource-image-container">
                        <img src="{{ asset('images/' . $resource['image']) }}" alt="{{ $resource['tag'] }}" class="resource-image">
                    </div>
                    
                    {{-- Card Content --}}
                    <div class="resource-content">
                        <p class="resource-tag">{{ $resource['tag'] }}</p>
                        <p class="resource-title">{{ $resource['title'] }}</p>
                        <a href="#" class="explore-link">Explore more →</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>