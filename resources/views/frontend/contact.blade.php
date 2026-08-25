@extends('frontend.layouts.master')
@section('content')
<!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">İletişim</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Ana Sayfa</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">İletişim</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">İletişim</h4>
                <h1 class="display-5 mb-4">Size Bir Telefon Kadar Yakınız</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Adres</p>
                                <h5 class="mb-0">Orta Mh. Kılıç Alipaşa Sk.<br>No:20A Kartal/İstanbul</h5>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Telefon</p>
                                <h5 class="mb-0">0216 514 80 83</h5>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-mobile-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mobil</p>
                                <h5 class="mb-0">0535 300 80 52</h5>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail</p>
                                <h5 class="mb-0">info@guvenkagroup.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Bizimle iletişime geçmek için aşağıdaki formu doldurabilirsiniz. En kısa sürede size geri dönüş yapılacaktır.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Adınız">
                                    <label for="name">Adınız</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="E-posta Adresiniz">
                                    <label for="email">E-posta Adresiniz</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Konu">
                                    <label for="subject">Konu</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Mesajınızı buraya yazın" id="message" style="height: 155px"></textarea>
                                    <label for="message">Mesajınız</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Mesaj Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <iframe class="w-100 mb-n2" style="height: 450px; border:0;"
            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d96428.79017231654!2d29.09078955928521!3d40.9508220689109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d40.9786274!2d29.125241199999998!4m5!1s0x14cac57f69349da7%3A0x88091e1d326bff19!2zR8O8dmVua2EgR3JvdXAsIE9ydGEsIEvEsWzEscOnIEFsaSBQYcWfYSBTay4gMjBBLCAzNDg4MCBLYXJ0YWwvxLBzdGFuYnVs!3m2!1d40.911994899999996!2d29.2049813!5e0!3m2!1str!2str!4v1786977451450!5m2!1str!2str"
            allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->
@endsection
