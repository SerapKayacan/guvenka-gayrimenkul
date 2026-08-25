@extends('frontend.layouts.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Blog & Haberler</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Ana sayfa</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Kurumsal Blog</h4>
                <h1 class="display-5 mb-4">Firmamızdan Güncel Gelişmeler</h1>
            </div>
            
            <div class="row g-4">
                @forelse($blogs as $blog)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ $blog->hasMedia('banner') ? $blog->getFirstMediaUrl('banner', 'large') : asset('assets/frontend/img/service-1.jpg') }}" alt="{{ $blog->title }}">
                        <div class="service-text p-5 d-flex flex-column w-100 h-100">
                            
                            <h3 class="mb-3">{{ Str::limit($blog->title, 40) }}</h3>
                            <p class="mb-4 text-white-50"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('d.m.Y') : '-' }}</p>
                            <p class="mb-4 flex-grow-1">{{ Str::limit($blog->short_description ?? strip_tags($blog->content), 100) }}</p>
                            <a class="btn mt-auto mx-auto" href="{{ route('frontend.blog.show', $blog->slug) }}"><i class="fa fa-plus text-primary me-3"></i>Devamını Oku</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center text-muted">
                    <p class="fs-5">Henüz blog yazısı bulunmamaktadır.</p>
                </div>
                @endforelse
            </div>
            
            @if($blogs->hasPages())
                <div class="d-flex justify-content-center mt-5">
                    {{ $blogs->links('pagination::bootstrap-4') }}
                </div>
                <style>
                    .pagination {
                        gap: 5px;
                    }
                    .page-item .page-link {
                        color: #0B2154;
                        border-radius: 5px;
                        font-weight: 500;
                    }
                    .page-item.active .page-link {
                        background-color: #D81324;
                        border-color: #D81324;
                        color: white;
                    }
                </style>
            @endif
        </div>
    </div>
    <!-- Blog List End -->

@endsection
