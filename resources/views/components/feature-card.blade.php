<div class="feature-card">
    <div class="icon-container">
        {{-- Variabel $icon kini dikirimkan langsung sebagai string HTML/Gambar --}}
        {!! $icon !!} 
    </div>
    <h3 class="card-title">{{ $title }}</h3>
    <p class="card-description">{{ $description }}</p>
</div>
{{-- Pastikan styling CSS untuk .feature-card ada di style.css --}}