<section class="client-logo-section">
    <div class="client-logo-content container">
        
        <div class="client-text">
            <p>Join 2,000+ businesses—local and global—that are already powering their HR with SunFish.</p>
        </div>
        
        <div class="client-logo-marquee-wrapper">
            
            <div class="client-logo-marquee">
                
                @for ($i = 1; $i <= 6; $i++) 
                    <img src="{{ asset('images/logo-' . $i . '.png') }}" alt="Client Logo {{ $i }}" class="client-logo-item">
                @endfor

                @for ($i = 1; $i <= 6; $i++)
                    <img src="{{ asset('images/logo-' . $i . '.png') }}" alt="Client Logo {{ $i }} duplicate" class="client-logo-item">
                @endfor
                
            </div>
            
        </div>
    </div>
</section>