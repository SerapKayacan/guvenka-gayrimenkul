@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Blog Detayı</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Ana sayfa</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('frontend.blog.index') }}">Blog</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ Str::limit($blog->title, 20) }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Content Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-5">
                <!-- Content -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Blog</h4>
                    <h1 class="display-5 mb-4">{{ $blog->title }}</h1>
                    
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-calendar-alt text-primary me-2"></i>
                        <span class="text-muted">{{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('d.m.Y') : '-' }}</span>
                    </div>

                    @if($blog->hasMedia('banner'))
                    <div class="mb-5">
                        <img src="{{ $blog->getFirstMediaUrl('banner','large') }}"
                             class="img-fluid w-100" style="object-fit:cover;" alt="{{ $blog->title }}">
                    </div>
                    @endif

                    @if($blog->short_description)
                    <div class="bg-light p-4 mb-4 rounded shadow-sm border-start border-5 border-primary wow fadeIn" data-wow-delay="0.2s">
                        <p class="mb-0 fw-bold">{{ $blog->short_description }}</p>
                    </div>
                    @endif

                    <!-- HTML Content -->
                    @if($blog->content)
                    <div class="mb-5 wow fadeIn" data-wow-delay="0.3s">
                        {!! $blog->content !!}
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    
                    <div class="bg-light p-5 rounded">
                        <h4 class="mb-4">İletişime Geçin</h4>
                        <p class="mb-4">Firmamız ve hizmetlerimiz hakkında daha detaylı bilgi almak için bize ulaşabilirsiniz.</p>
                        
                        <div class="d-flex mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 50px; height: 50px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Telefon</p>
                                <h5 class="mb-0">0535 300 80 52</h5>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 50px; height: 50px;">
                                <i class="fab fa-whatsapp text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">WhatsApp</p>
                                <a href="https://wa.me/905496165080?text={{ urlencode('Blog yazılarınızdan (' . $blog->title . ') yola çıkarak sizlere ulaşıyorum.') }}" target="_blank" class="h5 mb-0 text-dark">Hızlı Mesaj</a>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 50px; height: 50px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">E-Posta</p>
                                <h5 class="mb-0">info@guvenkagroup.com</h5>
                            </div>
                        </div>

                        <a href="{{ route('frontend.blog.index') }}" class="btn btn-primary w-100 py-3 mt-4">Tüm Bloglara Dön</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Detail Content End -->

@endsection
