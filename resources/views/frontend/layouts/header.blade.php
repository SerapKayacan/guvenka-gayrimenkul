<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEO::generate() !!}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link href="{{ asset('assets/frontend/img/favicon.webp') }}" rel="icon" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet" type="text/css">

    @if(env('GOOGLE_TAG_ID'))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_TAG_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ env('GOOGLE_TAG_ID') }}');
    </script>
    @endif
</head>

<body>
      <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="{{ asset('assets/frontend/img/icons/icon-1.png') }}" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+905353008052"><i class="fa fa-phone-alt text-primary me-2"></i>0535 300 80 52</a>
                    <a class="text-body px-2" href="mailto:info@guvenkagroup.com"><i class="fa fa-envelope-open text-primary me-2"></i>info@guvenkagroup.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
             
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://www.facebook.com/profile.php?id=100064028560042&sk=about" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://x.com/GuvenkaGroup" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href="https://www.instagram.com/guvenkagroup" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5  wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="{{ asset('\assets\frontend\img\logo.jpg') }}" alt="Icon"></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">ANA SAYFA</a>
                <a href="{{ route('about-us.index') }}" class="nav-item nav-link">KURUMSAL</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">GRUP ŞİRKETLERİMİZ</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="" class="dropdown-item">GKA İNŞAAT</a>
                        <a href="" class="dropdown-item">GKA HAFRİYAT</a>
                         <a href="" class="dropdown-item">GKA YIKIM</a>
                        <a href="" class="dropdown-item">GKA GAYRİMENKUL</a>
                        <a href="" class="dropdown-item">GKA TEMİZLİK</a>
                        <a href="" class="dropdown-item">GKA DANIŞMANLIK</a>
                        <a href="" class="dropdown-item">GKA ORGANİZASYON</a>
                    </div>
                </div>
                <a href="{{ route('contact.index') }}" class="nav-item nav-link">İLETİŞİM</a>
                <a href="{{ route('frontend.blog.index') }}" class="nav-item nav-link">BLOG</a>
            </div>
            <a href="{{ route('contact.index') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">TEKLİF AL</a>
        </div>
    </nav>
    <!-- Navbar End -->
