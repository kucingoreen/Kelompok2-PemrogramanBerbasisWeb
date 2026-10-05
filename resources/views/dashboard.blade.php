<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <!-- Link ke Font Google & Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="{{ asset('styles/css/style.css') }}">
</head>

<body>
    <!-- Tombol Tema Light/Dark -->
    <button id="theme-toggle" class="theme-btn" title="Ubah Tema">
        <i class="fas fa-moon"></i>
    </button>

    <div class="container">
        <!-- Header & Profil -->
        <header class="header text-center">
            <div class="profile-img-container">
                <img src="{{ asset('styles\assets\img\profile anime.jpeg') }}" alt="Foto Profil" class="profile-img">
            </div>
            <h1>Portofolio Pribadi</h1>
            <p class="subtitle" id="greeting-text">Selamat Datang di Website Saya!</p>
        </header>

        <!-- Tentang Saya -->
        <section class="card">
            <h2><i class="fas fa-user"></i> Tentang Saya</h2>
            <p class="text-center">
                Selamat datang di portofolio saya! Saya adalah seorang pengembang web yang bersemangat untuk menciptakan aplikasi web yang kreatif, modern, dan solutif.
            </p>
            <blockquote class="quote">
                "Kreativitas adalah kecerdasan yang bersenang-senang."
                <span>— Albert Einstein</span>
            </blockquote>
        </section>

        <!-- Pengalaman Kerja -->
        <section class="card">
            <h2><i class="fas fa-briefcase"></i> Pengalaman Kerja</h2>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Posisi</th>
                            <th>Perusahaan</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Web Developer</td>
                            <td>PT. Teknologi</td>
                            <td>2020 - 2023</td>
                        </tr>
                        <tr>
                            <td>Junior Developer</td>
                            <td>PT. Inovasi</td>
                            <td>2018 - 2020</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Hobi & Minat -->
        <section class="card">
            <h2><i class="fas fa-heart"></i> Hobi & Minat</h2>
            <div class="lists-grid">
                <div>
                    <h3><i class="fas fa-star"></i> Aktivitas Favorit</h3>
                    <ul>
                        <li><i class="fas fa-book-open"></i> Membaca Buku</li>
                        <li><i class="fas fa-running"></i> Olahraga</li>
                        <li><i class="fas fa-camera"></i> Fotografi</li>
                    </ul>
                </div>
                <div>
                    <h3><i class="fas fa-bullseye"></i> Pengembangan Diri</h3>
                    <ol>
                        <li>Belajar Bahasa Asing</li>
                        <li>Menulis Blog Teknologi</li>
                        <li>Melukis Digital</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Media (Lagu & Video) -->
        <section class="card">
            <h2><i class="fas fa-music"></i> Lagu Favorit</h2>
            <div class="audio-container text-center">
                <audio controls>
                    <source src="lagu.mp3" type="audio/mpeg">
                    Browser Anda tidak mendukung pemutar audio.
                </audio>
            </div>

            <h2 class="section-divider"><i class="fas fa-video"></i> Video Karya</h2>
            <div class="video-container">
                <iframe
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </section>

        <!-- Media Sosial -->
        <section class="card text-center">
            <h2><i class="fas fa-share-alt"></i> Ikuti Saya</h2>
            <div class="social-links">
                <a href="https://www.instagram.com/username" target="_blank" class="social-btn instagram">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://www.linkedin.com/in/username" target="_blank" class="social-btn linkedin">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <p>&copy; 2026 Portofolio Pribadi. Semua Hak Dilindungi.</p>
        </footer>
    </div>

    <!-- Link ke file JavaScript -->
    <script src="{{ asset('styles/js/script.js') }}"></script>
</body>

</html>
