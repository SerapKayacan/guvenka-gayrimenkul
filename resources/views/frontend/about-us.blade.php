@extends('frontend.layouts.master')
@section('content')

   <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Kurumsal</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Ana sayfa</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Kurumsal</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/about-1.jpg') }}" alt="">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/about-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Hakkımızda</h4>
                    <h1 class="display-5 mb-4">İnşaat ve Altyapıda Güvenin Merkezi</h1>
                    <p class="mb-4 text-dark"><strong>Güvenka Group</strong>, 1990 yılında sektördeki köklü geçmişinden aldığı güçlü bakış açısıyla İnşaat, Hafriyat, Yıkım ve Altyapı alanlarında iş hayatına merhaba demiştir.</p>
                    <p class="mb-4">Sektörün öncü firmalarından olan Güvenka Group, daima yeniliklere imza atarak, hizmet çatısına 2019 yılında Danışmanlık, Organizasyon Temizlik ve E-ticaret alanlarını da katarak, çeyrek asrı geçen sektör deneyimini taçlandırmıştır. Şirketimiz ülkemizin her yerinde dev projelerle adından sıkça bahsettiren genç ve dinamik kadrosuyla çalışmalarına hız kesmeden devam etmektedir.</p>

                    <div class="d-flex align-items-center mb-5 mt-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary rounded shadow-sm" style="width: 120px; height: 120px;">
                            <h1 class="display-1 text-primary mb-n2" data-toggle="counter-up">36</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Yıllık</h3>
                            <h3>Sektör</h3>
                            <h3 class="mb-0">Deneyimi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5 bg-light mt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Neden Biz?</h4>
                    <h1 class="display-5 mb-4">Gücümüzü Güven ve Kaliteden Alıyoruz!</h1>
                    <p class="mb-4">Hedefimiz yalnızca proje üretmek değil, tüm hizmetlerimizde ve faaliyet gösterdiğimiz tüm sektörlerde fark yaratmaktır.</p>
                    <div class="row g-4 mt-2">
                        <div class="col-12">
                            <div class="d-flex align-items-start bg-white p-4 rounded-3 shadow-sm border-start border-5 border-primary transition hover-shadow">
                                <i class="fa fa-2x fa-star text-primary flex-shrink-0 mt-1"></i>
                                <div class="ms-4">
                                    <h3 class="mb-2">Misyonumuz</h3>
                                    <p class="mb-0">Sağladığımız tüm hizmetlerde müşteri memnuniyeti temelli <strong>“Güven ve Kalite”</strong> değerlerimizin, eksiksiz yer almasını sağlamak.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start bg-white p-4 rounded-3 shadow-sm border-start border-5 border-primary transition hover-shadow">
                                <i class="fa fa-2x fa-bullseye text-primary flex-shrink-0 mt-1"></i>
                                <div class="ms-4">
                                    <h3 class="mb-2">Vizyonumuz</h3>
                                    <p class="mb-0">Güvenka Group şirketleri olarak, her zaman çağın ötesinde ve faaliyet gösterdiğimiz sektörlerde ihtiyaçlara <strong>“güvenilir”</strong> çözüm olarak görülmeyi hedefledik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/about-2.jpg') }}" alt="">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/about-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    

@endsection
