<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project - Bisport</title>
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
<div class="circle-shape5"></div>
    <div class="container" style="margin-top: 100px; padding-bottom: 20px;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-lg-start">
                <h1>My Project</h1>
                <p>I have done the creation of several projects consisting of applications as well as editing projects. </p>
                <a href="javascript:history.back()" class="btn btn-green"><i class="fas fa-chevron-left"></i> Previous</a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="rotated-image-container">
                    <img src="{{ asset('assets/setting_icon.png') }}" alt="example" class="img-fluid" style="width: 410px; height: auto; animation: rotate 5s linear infinite;">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Products Section -->
<section id="next">
<div class="container mb-5">
    <h2 class="text-center mb-4 mt-5">My Projects Are</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="product-card">
                <img src="{{ asset('assets/jake.24') }}" alt="Reading">
                <h3>YDS 가사 ft. Jake</h3>
                <button class="btn btn-warning"><a href="https://www.instagram.com/reel/C96NP-uSeUK/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" class="nav-link"><b>See Project</b></a></button>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="product-card">
                <img src="{{ asset('assets/app_icon_v2.png') }}" alt="Dancing">
                <h3>Prone APP</h3>
                <button class="btn btn-warning"><a href="https://bismakeepslay.github.io/proneapp1.1/" class="nav-link"><b>See Project</b></a></button>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="product-card">
                <img src="{{ asset('assets/jaehyun.jpeg') }}" alt="Editing">
                <h3>ND 새춤 ft. Jaehyun</h3>
                <button class="btn btn-warning"><a href="https://www.instagram.com/reel/C8rS2dSSLFJ/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" class="nav-link"><b>See Project</b></a></button>
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
