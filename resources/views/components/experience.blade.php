<section class="trusted-partner-section">
    <div class="container">
        {{-- Logo Section --}}
        <div class="logo-group">
            <div class="logos">
                {{-- Ganti path logo ini dengan path aktual di proyek Laravel Anda --}}
                <img src="{{ asset('images/logo-putih-dataon.png') }}" alt="DataOn Logo" class="logo-image">
                <img src="{{ asset('images/sunfish-hr-logo-putih.png') }}" alt="SunFish Logo" class="logo-image">
            </div>
            {{-- <p class="company-tag">A HUMANICA COMPANY</p> --}}
        </div>

        {{-- Main Text Section --}}
        <div class="text-content">
            <h2 class="main-title">
                Mitra Tepercaya dalam Pengelolaan SDM
            </h2>
            <p class="description">
                Selama lebih dari 20 tahun, DataOn menghadirkan inovasi solusi bisnis end-to-end yang berfokus pada karyawan, mulai dari pemantauan waktu kerja, sistem penggajian, hingga rencana pengembangan karir. Kami bekerja berdampingan dengan Anda untuk memberikan solusi dan layanan terbaik untuk perjalanan SDM perusahaan Anda menciptakan nilai yang berkelanjutan.
            </p>
        </div>

        {{-- Statistics Section --}}
        <div class="stats-wrapper"> 
            <div class="stats-grid">
                @php
                    $stats = [
                        ['value' => '2000+', 'label' => 'Clients'],
                        ['value' => '>1 Mio', 'label' => 'Juta pengguna aktif harian'],
                        ['value' => '25 Years', 'label' => 'Tahun pengalaman HR!'],
                        ['value' => '>300', 'label' => 'Staf berorientasi client di Asia Tenggara'],
                        ['value' => '9', 'label' => 'Kantor regional'],
                    ];
                @endphp

                @foreach ($stats as $stat)
                    <div class="stat-item">
                        <p class="stat-value">
                            {{ $stat['value'] }}
                        </p>
                        <p class="stat-label">
                            {{ $stat['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>