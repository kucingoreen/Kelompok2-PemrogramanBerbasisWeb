document.addEventListener('DOMContentLoaded', () => {
    // 1. Fitur Dark Mode / Light Mode Toggle
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeIcon = themeToggleBtn.querySelector('i');

    // Cek preferensi tema sebelumnya dari LocalStorage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        document.body.classList.add('dark-theme');
        themeIcon.classList.replace('fa-moon', 'fa-sun');
    }

    themeToggleBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-theme');
        const isDark = document.body.classList.contains('dark-theme');

        // Ubah Ikon
        if (isDark) {
            themeIcon.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('theme', 'dark');
        } else {
            themeIcon.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('theme', 'light');
        }
    });

    // 2. Salam Dinamis berdasarkan Waktu saat ini
    const greetingText = document.getElementById('greeting-text');
    const currentHour = new Date().getHours();
    let greeting = 'Selamat Datang di Portofolio Saya!';

    if (currentHour >= 5 && currentHour < 12) {
        greeting = 'Selamat Pagi! ☀️ Selamat Datang';
    } else if (currentHour >= 12 && currentHour < 15) {
        greeting = 'Selamat Siang! 🌤️ Selamat Datang';
    } else if (currentHour >= 15 && currentHour < 18) {
        greeting = 'Selamat Sore! 🌅 Selamat Datang';
    } else {
        greeting = 'Selamat Malam! 🌙 Selamat Datang';
    }

    greetingText.textContent = greeting;

    // 3. Efek Hover Interaktif pada Baris Tabel
    const tableRows = document.querySelectorAll('tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', () => {
            row.style.transition = 'background-color 0.2s ease';
        });
    });
});
