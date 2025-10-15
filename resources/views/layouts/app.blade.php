{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All-In-One HRIS Solution for Smarter HR Operations</title>
    {{-- Link ke CSS Anda (misalnya Bootstrap/Tailwind) --}}
    <link href="path/to/your/css/framework.css" rel="stylesheet">
</head>
<body>

    @include('partials.header') {{-- Panggil header di sini --}}

    @include('partials.announcement-bar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer') {{-- Panggil header di sini --}}

    {{-- Link ke JS Anda (misalnya Bootstrap JS untuk dropdown) --}}
    <script src="path/to/your/js/framework.js"></script>
</body>
</html>