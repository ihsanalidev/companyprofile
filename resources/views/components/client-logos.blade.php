@php
    use Illuminate\Support\Facades\File;

    // Ambil semua file dari folder public/images yang diawali dengan "client-"
    $logoFiles = collect(File::files(public_path('images')))
                    ->filter(fn($file) => str_starts_with($file->getFilename(), 'client-'))
                    ->sortBy(fn($file) => $file->getFilename())
                    ->values();
@endphp

<section class="client-logo-section">
    <div class="client-logo-content container">
        
        <div class="client-text">
            <p>Join 2,000+ businesses—local and global—that are already powering their HR with SunFish.</p>
        </div>
        
        <div class="client-logo-marquee-wrapper">
            <div class="client-logo-marquee">
                {{-- Loop pertama --}}
                @foreach ($logoFiles as $file)
                    <img src="{{ asset('images/' . $file->getFilename()) }}" 
                         alt="Client Logo {{ $loop->iteration }}" 
                         class="client-logo-item">
                @endforeach

                {{-- Duplikasi untuk animasi looping --}}
                @foreach ($logoFiles as $file)
                    <img src="{{ asset('images/' . $file->getFilename()) }}" 
                         alt="Client Logo {{ $loop->iteration }} duplicate" 
                         class="client-logo-item">
                @endforeach
            </div>
        </div>
    </div>
</section>

