const dropdowns = document.querySelectorAll('.dropdown-container');

dropdowns.forEach(dropdown => {
    const btn = dropdown.querySelector('.dropdown-toggle');
    const menu = dropdown.querySelector('.dropdown-menu');

    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        // tutup dropdown lain
        dropdowns.forEach(d => {
            if (d !== dropdown) d.querySelector('.dropdown-menu').classList.remove('show');
        });
        // toggle dropdown ini
        menu.classList.toggle('show');
    });
});

// tutup semua dropdown saat klik di luar
document.addEventListener('click', () => {
    dropdowns.forEach(d => d.querySelector('.dropdown-menu').classList.remove('show'));
});