<section class="insights-resources-section">
    <div class="container">
        
        {{-- Header Section --}}
        <div class="resources-header">
            <h2 class="resources-title">Insights & Resources</h2>
            <p class="resources-description">
                Stay ahead with expert perspectives, industry trends, and practical guides designed to help you make smarter decisions in HR, operations, and digital transformation.
            </p>
        </div>

        {{-- Resource Cards Grid --}}
        <div class="resource-cards-grid">
            @php
                $resources = [
                    [
                        'tag' => 'Whitepaper', 
                        'title' => 'Explore in-depth whitepapers featuring expert insights on HR strategy, digital transformation, and enterprise solutions.', 
                        'image' => 'blog-1.png'
                    ],
                    [
                        'tag' => 'Blog', 
                        'title' => 'Stay updated with the latest trends, tips, and thought leadership in HR management and technology.', 
                        'image' => 'blog-2.webp'
                    ],
                    [
                        'tag' => 'Events', 
                        'title' => 'Join our upcoming webinars, workshops, and industry events to learn, connect, and grow with the HR community.', 
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