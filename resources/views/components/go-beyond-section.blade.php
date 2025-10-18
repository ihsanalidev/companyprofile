<section class="go-beyond-section">
    {{-- Bagian Header Teks --}}
    <div class="text-center section-header">
        <h1 class="main-title">Go Beyond with DataOn</h1>
        <p class="main-description">
            At DataOn, we understand that successful and meaningful transformation begins with people. 
            Our Human Resource and People Development solutions are designed to bring seamless 
            communication, enhance collaboration, and align teams toward shared goals.
        </p>
    </div>

    {{-- Grid untuk menampung kartu fitur --}}
    <div class="card-grid container">
        
        {{-- Menggunakan @include untuk setiap kartu dan meneruskan data --}}
        
        @include('components.feature-card', [
            'icon' => '<i class="fa-solid fa-globe fa-2x"></i>', 
            'title' => 'One Platform. Fully Localized.',
            'description' => 'A complete HRMS system with 25+ integrated modules, covering everything from onboarding to payroll, fully localized for Indonesia, Malaysia, Thailand, Vietnam, and the Philippines.'
        ])
        @include('components.feature-card', [
            'icon' => '<i class="fa-solid fa-hourglass-half fa-2x"></i>', 
            'title' => 'One Platform. Fully Localized.',
            'description' => 'A complete HRMS system with 25+ integrated modules, covering everything from onboarding to payroll, fully localized for Indonesia, Malaysia, Thailand, Vietnam, and the Philippines.'
        ])
        @include('components.feature-card', [
            'icon' => '<i class="fa-solid fa-desktop fa-2x"></i>', 
            'title' => 'One Platform. Fully Localized.',
            'description' => 'A complete HRMS system with 25+ integrated modules, covering everything from onboarding to payroll, fully localized for Indonesia, Malaysia, Thailand, Vietnam, and the Philippines.'
        ])
        @include('components.feature-card', [
            'icon' => '<i class="fa-solid fa-thumbs-up fa-2x"></i>', 
            'title' => 'One Platform. Fully Localized.',
            'description' => 'A complete HRMS system with 25+ integrated modules, covering everything from onboarding to payroll, fully localized for Indonesia, Malaysia, Thailand, Vietnam, and the Philippines.'
        ])

    </div>
</section>
{{-- Pastikan styling CSS untuk .go-beyond-section dan .card-grid ada di style.css --}}