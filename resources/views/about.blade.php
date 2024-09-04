<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Bisport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/icon.png') }}" type="image/png">
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
                    <a class="nav-link" href="/my_project">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/favorites">Favorites</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="hero">
    <div class="hero-section text-center">
        <!-- Circle Shape -->
        <div class="circle-shape"></div>
        <div class="circle-shape2"></div>
        <div class="container" style="margin-top: 50px; padding-bottom: 20px;">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="rotated-image-container">
                        <img src="{{ asset('assets/head_icon.png') }}" alt="example" class="img-fluid" style="width: 410px; height: auto;">
                    </div>
                </div>
                <div class="col-lg-6 text-lg-start">
                    <h1>My Profile</h1>
                    <p>Hello everyone, I’m Bisma Putra Adiyana</p>
                    <p>I was born on January 25, 2007 and I am 17 years old.</p>
                    <p>I attend SMKN 1 Subang and I aspire to be someone who can inspire many people and amaze others.</p>
                    <p>I have idols in both editing and music, in editing I idolize Sienna, Amelie, Lauren and Ivan, while in music I idolize Ariana Grande, BLACKPINK, Beyonce, Enhypen and BABYMONSTER.</p>
                    <a href="javascript:history.back()" class="btn btn-green"><i class="fas fa-chevron-left"></i> Previous</a>
                    <a href="/favorites" class="btn btn-blue"><b>Favorites <i class="fas fa-star"></i></b></a>
                    <a href="/my_project" class="btn btn-purple"><b>See My Project <i class="fas fa-gear"></i></b></a>
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
</body>
</html>
