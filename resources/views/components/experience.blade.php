<section class="trusted-partner-section">
    <div class="trusted-container"> 

        <div class="logo-group">
            <div class="logos">
                <img src="{{ asset('images/logo-putih-dataon.png') }}" alt="DataOn Logo" class="logo-image">
                <img src="{{ asset('images/sunfish-hr-logo-putih.png') }}" alt="SunFish Logo" class="logo-image">
            </div>
        </div>

        <div class="text-content">
            <h2 class="main-title">
                Your Trusted Partner for Human Resource Management
            </h2>
            <p class="description">
                Over the past 20 years, DataOn has built innovative, end-to-end business solutions that center around employees—their time, their payroll, and simplifying their work lives. Whether you are looking to implement a digital work-life HRIS/ HCM platform, a mobile app, or a reliable partner to run your local and global payroll—we have the solutions and services you need to get ready for what is next in your people journey. We work side by side with you to create value for years to come.
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