<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites - Bisport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/icon.png') }}" type="image/png">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Menghilangkan scroll horizontal */
            background: linear-gradient(75deg, #FFC0CB 50%, #00CED1 50%);
            color: white;
        }

        .hero-section {
            text-align: center;
            padding-bottom: 20px;
        }

        /* Hapus aturan rotasi dan background untuk gambar */
        .hero-section .rotated-image-container {
            /* Hapus atau kosongkan aturan di sini */
            width: 100%; /* Ubah sesuai dengan lebar yang diinginkan */
            height: auto; /* Ubah sesuai dengan tinggi yang diinginkan */
            display: flex;
            justify-content: center;
            background-color: transparent; /* Ganti dengan warna latar belakang sesuai kebutuhan */
            box-shadow: none; /* Hapus bayangan */
        }

        .hero-section .rotated-image-container img {
            width: 100%; /* Menyesuaikan lebar gambar dengan lebar container */
            height: auto; /* Menjaga rasio aspek gambar */
            object-fit: cover; /* Pastikan gambar tetap terisi penuh jika diperlukan */
            border-radius: 0; /* Hapus sudut melengkung jika tidak diperlukan */
        }

        /* Sesuaikan gambar di hero section */
        .hero-section img {
            max-width: 100%; /* Mengatur gambar agar tidak melampaui lebar container */
            height: auto; /* Mengatur gambar agar tetap dalam rasio */
            position: static; /* Hapus posisi absolut jika ada */
            transform: none; /* Hapus transformasi */
            z-index: auto; /* Mengatur z-index ke default */
        }

        .rotated-image-container {
            max-width: 100%;
            display: flex;
            justify-content: center;
        }

        .rotated-image-container img {
            width: 410px; /* Atur lebar gambar sesuai kebutuhan */
            height: auto;
            animation: rotate 5s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .audio-player {
            display: flex;
            width: 450px;
            align-items: center;
            background-color: #282c34;
            padding: 10px;
            border-radius: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .audio-player button {
            background-color: #61dafb;
            border: none;
            border-radius: 25px;
            color: white;
            font-size: 24px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .audio-player button:hover {
            background-color: #21a1f1;
        }

        .audio-player .progress-bar {
            width: 450px;
            height: 5px;
            background-color: #444;
            border-radius: 2.5px;
            margin-left: 10px;
            position: relative;
        }

        .audio-player .progress {
            width: 0;
            height: 100%;
            background-color: #61dafb;
            border-radius: 2.5px;
            transition: width 0.1s;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
        }

        .footer .social-icons a {
            color: #ffffff;
            margin: 0 10px;
            font-size: 24px;
        }

        .footer .social-icons a:hover {
            color: #FFC0CB;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Bisport</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/about">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my_project">My Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/favorites">Favorites</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section href="top" class="hero-section">
<div class="circle-shape6"></div>
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-lg-start">
                <h1>Favorite Song</h1>
                <p>Supernatural - Ariana Grande</p>
                <!-- Audio Player -->
                <div class="audio-player">
                    <button id="playPauseBtn" class="play-btn">
                        <i class="fas fa-play"></i>
                    </button>
                    <div class="progress-bar">
                        <div id="progress" class="progress"></div>
                    </div>
                </div>
                <!-- Button yang sudah ada -->
                <a href="javascript:history.back()" class="btn btn-blue"><i class="fas fa-chevron-left"></i> Previous</a>
                <a href="#next" class="btn btn-green">Next <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <!-- Hapus container rotasi dan gunakan gambar langsung -->
                <img src="{{ asset('assets/cd.png') }}" alt="CD" style="width: 80%; height: auto; animation: rotate 5s linear infinite;">
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="next">
    <div class="container mb-5">
        <h2 class="text-center mb-4 mt-5">My Favorite Foods</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="{{ asset('assets/karedok.jpeg') }}" alt="Dancing" class="img-fluid">
                    <h3>Karedok</h3>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="{{ asset('assets/rujak.jpg') }}" alt="Reading" class="img-fluid">
                    <h3>Rujak</h3>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="{{ asset('assets/ayam_geprek3.jpeg') }}" alt="Editing" class="img-fluid">
                    <h3>Ayamm Geprek</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section -->
<section class="hero-section">
    <div class="circle-shape"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-lg-start">
                <h1>Favorite Group</h1>
                <p>BLACKPINK, BABYMONSTER & Enhypen</p>
                <!-- Button yang sudah ada -->
                <a href="#top" class="btn btn-blue"><i class="fas fa-chevron-up"></i> Back to top</a>
                <a href="#next" class="btn btn-green">Home <i class="fas fa-home"></i></a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <!-- Bootstrap Carousel -->
                <div id="favoriteGroupsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/blackpink.jpeg') }}" class="d-block w-100 carousel-image" alt="BLACKPINK">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/babymonster5.jpeg') }}" class="d-block w-100 carousel-image" alt="BABYMONSTER">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/enhypen3.jpeg') }}" class="d-block w-100 carousel-image" alt="Enhypen">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#favoriteGroupsCarousel" data-bs-slide="prev">
                        <i class="fas fa-chevron-left fs-4 text-warning pt-3" style="background-color: #f7f7f769; width: 50px; height: 50px; border-radius: 20px;"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#favoriteGroupsCarousel" data-bs-slide="next">
                    <i class="fas fa-chevron-right fs-4 text-warning pt-3" style="background-color: #f7f7f769; width: 50px; height: 50px; border-radius: 20px;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer bg-dark text-white text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="mb-2">© 2024 Bisma Putra Adiyana. All Rights Reserved.</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/scqtify_" target="_blank" class="text-white mx-2">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://tiktok.com/@qwertyvidss_" target="_blank" class="text-white mx-2">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://github.com/Bismakeepslay" target="_blank" class="text-white mx-2">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const playPauseBtn = document.getElementById('playPauseBtn');
        const progress = document.getElementById('progress');
        const audio = new Audio('{{ asset('assets/supernatural_ariana.mp3') }}');
        let isPlaying = false;

        playPauseBtn.addEventListener('click', function () {
            if (isPlaying) {
                audio.pause();
                playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
            } else {
                audio.play();
                playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
            }
            isPlaying = !isPlaying;
        });

        audio.addEventListener('timeupdate', function () {
            const percent = (audio.currentTime / audio.duration) * 100;
            progress.style.width = percent + '%';
        });
    });
</script>
</body>
</html>
