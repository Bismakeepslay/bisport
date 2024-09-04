<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content - Bisport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/icon.png') }}" type="image/png">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#hero">Bisport</a>
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
<section id="hero">
<div class="hero-section text-center">
<div class="circle-shape3"></div>
    <div class="container" style="margin-top: 100px; padding-bottom: 20px;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-lg-start">
                <h1>Bisma Putra Adiyana</h1>
                <p>Hello everyone, I`m Bisma Putra Adiyana</p>
                <a href="/about" class="btn btn-blue"><b>About Me</b></a>
                <a href="/favorites" class="btn btn-outline-dark">Favorites <i class="fas fa-star"></i></a>
                <a href="#next" class="btn btn-green">Next <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="circle-shape4"></div>
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="rotated-image-container">
                    <img src="{{ asset('assets/bisma.png') }}" alt="example" class="img-fluid" style="width: 410px; height: 410px;">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Products Section -->
<section id="next">
<div class="container mb-5">
    <h2 class="text-center mb-4 mt-5">My Hobbies Are</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="product-card">
                <img src="{{ asset('assets/dancing.jpeg') }}" alt="Dancing">
                <h3>Dancing</h3>
                <h6>My dance style are Hip Hop, K-Pop, Afro</h6>
                <p>since childhood - now</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="product-card">
                <img src="{{ asset('assets/reading.jpeg') }}" alt="Reading">
                <h3>Reading</h3>
                <h6>Reading novels on Wattpad</h6>
                <p>since 2022 - now</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="product-card">
                <img src="{{ asset('assets/editor.jpeg') }}" alt="Editing">
                <h3>Editing</h3>
                <h6>I Edit in After Effect, Alight Motion and Inshot</h6>
                <p>since 2020 - now</p>
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
