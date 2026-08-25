@extends('frontend.layouts.master')
@section('content')
<!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
             @foreach ($carousels as $index => $carousel)
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ $carousel->getFirstMediaUrl('banner') }}'>">
                 <img class="img-fluid" src="{{ $carousel->getFirstMediaUrl('banner') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">{{ $carousel->title }}</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">{{ $carousel->description }}</p>
                                <a href="{{ $carousel->button_url }}" class="btn btn-primary py-3 px-5 animated slideInLeft">{{ $carousel->button_text }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0 rounded-3 shadow-sm border-bottom border-5 border-primary">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/frontend/img/icons/icon-2.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3 text-dark">Köklü Deneyim</h3>
                        <p class="mb-0 text-muted">1990 yılından bugüne İnşaat, Hafriyat, Yıkım ve Altyapı alanlarında, dev projelerle sektörün öncüsü olarak hizmet veriyoruz.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0 rounded-3 shadow-sm border-bottom border-5 border-primary">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/frontend/img/icons/icon-3.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3 text-dark">Misyonumuz</h3>
                        <p class="mb-0 text-muted">Sağladığımız tüm hizmetlerde müşteri memnuniyeti temelli <strong>“Güven ve Kalite”</strong> değerlerimizin, eksiksiz yer almasını sağlamak.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0 rounded-3 shadow-sm border-bottom border-5 border-primary">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/frontend/img/icons/icon-4.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3 text-dark">Vizyonumuz</h3>
                        <p class="mb-0 text-muted">Her zaman çağın ötesinde ve faaliyet gösterdiğimiz sektörlerde ihtiyaçlara <strong>“güvenilir”</strong> çözüm olarak görülmeyi hedefliyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


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
                    
                    <div class="bg-light p-4 mb-4 rounded shadow-sm border-start border-5 border-primary wow fadeIn" data-wow-delay="0.6s">
                        <h4 class="mb-2"><i class="fa fa-bullseye text-primary me-2"></i>Hedeflerimiz</h4>
                        <p class="mb-2">Sağladığımız tüm hizmetlerde müşteri memnuniyeti temelli <strong>“Güven ve Kalite”</strong> değerlerimizin, eksiksiz yer almasını sağlıyoruz.</p>
                        <p class="mb-0">Güvenka Group şirketleri olarak, her zaman çağın ötesinde ve faaliyet gösterdiğimiz sektörlerde ihtiyaçlara <strong>“güvenilir”</strong> çözüm olarak görülmeyi hedefledik.</p>
                    </div>

                    <div class="d-flex align-items-center mb-5">
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


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Grup Şirketlerimiz</h4>
                <h1 class="display-5 mb-4">Birçok Farklı Sektörde Profesyonel ve Güvenilir Hizmet</h1>
            </div>
            <div class="row g-4">
                <!-- Service 1: İnşaat -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/frontend/img/service-1.jpg') }}" alt="">
                        <div class="service-text p-4">
                            <i class="fa fa-3x fa-building text-primary mb-4"></i>
                            <h4 class="mb-3">İnşaat</h4>
                            <p class="mb-4">Köklü tecrübemizle en yenilikçi projelere imza atıyoruz.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 2: Hafriyat -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/frontend/img/service-2.jpg') }}" alt="">
                        <div class="service-text p-4">
                            <i class="fa fa-3x fa-truck-loading text-primary mb-4"></i>
                            <h4 class="mb-3">Hafriyat</h4>
                            <p class="mb-4">Güçlü makine parkurumuzla her türlü hafriyat işlemlerinizde yanınızdayız.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 3: Yıkım -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/frontend/img/service-3.jpg') }}" alt="">
                        <div class="service-text p-4">
                            <i class="fa fa-3x fa-hammer text-primary mb-4"></i>
                            <h4 class="mb-3">Yıkım</h4>
                            <p class="mb-4">Çevre ve iş güvenliğine tam uyumlu, kontrollü profesyonel yıkım hizmeti.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 4: Altyapı -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/frontend/img/service-4.jpg') }}" alt="">
                        <div class="service-text p-4">
                            <i class="fa fa-3x fa-road text-primary mb-4"></i>
                            <h4 class="mb-3">Altyapı</h4>
                            <p class="mb-4">Modern şehirciliğin sağlam temellerini oluşturuyoruz.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 5: Danışmanlık -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/frontend/img/service-5.jpg') }}" alt="">
                        <div class="service-text p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h4 class="mb-3">Danışmanlık</h4>
                            <p class="mb-4">Deneyimli kadromuzla kurumsal süreçlerinizde profesyonel rehberlik.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 6: Organizasyon -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/frontend/img/service-6.jpg') }}" alt="">
                        <div class="service-text p-4">
                            <i class="fa fa-3x fa-calendar-alt text-primary mb-4"></i>
                            <h4 class="mb-3">Organizasyon</h4>
                            <p class="mb-4">Fark yaratan kusursuz kurumsal organizasyon çözümleri.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 7: Temizlik -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/frontend/img/service-1.jpg') }}" alt="">
                        <div class="service-text p-4">
                            <i class="fa fa-3x fa-broom text-primary mb-4"></i>
                            <h4 class="mb-3">Temizlik</h4>
                            <p class="mb-4">Sağlıklı ve hijyenik yaşam ile çalışma alanları oluşturuyoruz.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 8: E-ticaret -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/frontend/img/service-2.jpg') }}" alt="">
                        <div class="service-text p-4">
                            <i class="fa fa-3x fa-shopping-cart text-primary mb-4"></i>
                            <h4 class="mb-3">E-ticaret</h4>
                            <p class="mb-4">Güçlü dijital altyapımızla hızlı ve güvenilir online hizmetler.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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


    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Faaliyet Alanlarımız</h4>
                <h1 class="display-5 mb-4">Güvenka Group ile Her Sektörde Güçlü Çözümler</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. İnşaat & Emlak</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02.Yıkım & Hafriyat</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Temizlik</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Etkinlik & Organizasyon</h3>
                        </button>
                         <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-5" type="button">
                            <h3 class="m-0">05.Danışmanlık</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <!-- Tab 1: İnşaat & Emlak -->
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/project-1.jpg') }}"
                                            style="object-fit: cover;" alt="İnşaat & Emlak">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">36 Yıllık Tecrübeyle Sağlam Temeller</h1>
                                    <p class="mb-4">Güvenka Group, 1990 yılından bu yana inşaat ve emlak sektöründe güvenin ve kalitenin simgesi olmuştur. Konut projelerinden ticari yapılara kadar her ölçekte, dayanıklı ve yenilikçi çözümler üretiyoruz.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Konut & Ticari Yapı Projeleri</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Anahtar Teslim İnşaat Hizmeti</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Emlak Danışmanlığı & Yatırım</p>
                                    <a href="{{ route('about-us.index') }}" class="btn btn-primary py-3 px-5 mt-3">Daha Fazla</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 2: Yıkım & Hafriyat -->
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/project-2.jpg') }}"
                                            style="object-fit: cover;" alt="Yıkım & Hafriyat">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Güvenli ve Kontrollü Yıkım & Hafriyat</h1>
                                    <p class="mb-4">Güçlü makine parkurumuzu ve deneyimli kadromuzu, çevre ile iş güvenliği standartlarına tam uyumlu biçimde kullanıyoruz. Her ölçekteki yıkım ve hafriyat projesini zamanında ve eksiksiz teslim ediyoruz.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Kontrollü Bina Yıkımı</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Zemin Hazırlama & Hafriyat</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Çevre Güvenliği & Atık Yönetimi</p>
                                    <a href="{{ route('about-us.index') }}" class="btn btn-primary py-3 px-5 mt-3">Daha Fazla</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 3: Temizlik -->
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/project-3.jpg') }}"
                                            style="object-fit: cover;" alt="Temizlik">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Hijyenik ve Sağlıklı Yaşam Alanları</h1>
                                    <p class="mb-4">Güvenka Group olarak, 2019 yılında hizmet portföyümüze kattığımız profesyonel temizlik hizmetiyle; kurumsal ofislerden büyük sanayi tesislerine kadar her alanda titiz ve güvenilir bir çözüm sunuyoruz.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Endüstriyel & Kurumsal Temizlik</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>İnşaat Sonrası Temizlik</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Periyodik Bakım & Hijyen Protokolleri</p>
                                    <a href="{{ route('about-us.index') }}" class="btn btn-primary py-3 px-5 mt-3">Daha Fazla</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 4: Etkinlik & Organizasyon -->
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/project-4.jpg') }}"
                                            style="object-fit: cover;" alt="Etkinlik & Organizasyon">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Fark Yaratan Kurumsal Organizasyonlar</h1>
                                    <p class="mb-4">Genç ve dinamik organizasyon ekibimizle kurumsal etkinliklerinizi kusursuz bir deneyime dönüştürüyoruz. Planlama aşamasından uygulama ve kapanışa kadar tüm süreçleri titizlikle yönetiyoruz.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Kurumsal Etkinlik Yönetimi</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Lansman & Açılış Organizasyonları</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Lojistik & Teknik Destek</p>
                                    <a href="{{ route('about-us.index') }}" class="btn btn-primary py-3 px-5 mt-3">Daha Fazla</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 5: Danışmanlık -->
                        <div class="tab-pane fade" id="tab-pane-5">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/frontend/img/project-1.jpg') }}"
                                            style="object-fit: cover;" alt="Danışmanlık">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Deneyimin Rehberliğiyle Doğru Kararlar</h1>
                                    <p class="mb-4">36 yılı aşkın sektör birikimimizi, kurumsal danışmanlık hizmetlerimizle sizin için değere dönüştürüyoruz. Proje fizibilite analizinden süreç optimizasyonuna kadar her aşamada güvenilir bir iş ortağı olarak yanınızdayız.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Proje Fizibilite & Yatırım Analizi</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Kurumsal Süreç Danışmanlığı</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Stratejik Planlama & Raporlama</p>
                                    <a href="{{ route('about-us.index') }}" class="btn btn-primary py-3 px-5 mt-3">Daha Fazla</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->
    
   

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Randevu Alın</h4>
                    <h1 class="display-5 mb-4">Projelerinizi Hayata Geçirmek İçin Bize Ulaşın</h1>
                    <p class="mb-4">Projeleriniz için alanında uzman ve dinamik kadromuzla iletişime geçin. Size en kısa sürede dönüş yaparak ihtiyaçlarınıza uygun çözümler sunalım.</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Bizi Arayın</p>
                                    <h4 class="mb-0">0535 300 80 52</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">E-Posta Gönderin</p>
                                    <h4 class="mb-0">info@guvenkagroup.com</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Adınız Soyadınız" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control" placeholder="E-posta Adresiniz" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Telefon Numaranız" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select class="form-select" style="height: 55px;">
                                <option selected>Hizmet Seçiniz</option>
                                <option value="insaat">İnşaat</option>
                                <option value="hafriyat">Hafriyat</option>
                                <option value="yikim">Yıkım</option>
                                <option value="altyapi">Altyapı</option>
                                <option value="danismanlik">Danışmanlık</option>
                                <option value="organizasyon">Organizasyon</option>
                                <option value="temizlik">Temizlik</option>
                                <option value="eticaret">E-ticaret</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Tarih Seçiniz" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Saat Seçiniz" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="5" placeholder="Mesajınız"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Randevu Talebi Gönder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


@endsection
