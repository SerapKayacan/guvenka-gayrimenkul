<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">

            <!-- Col 1: İletişim -->
            <div class="col-lg-3 col-md-6">
                <h3 class="text-light mb-4">Güvenka Group</h3>
                <p class="mb-4" style="color:#aaa;">1990 yılından bu yana İnşaat, Hafriyat, Yıkım ve Altyapı alanlarında güven ve kaliteyi esas alarak hizmet veriyoruz.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>İstanbul, Türkiye</p>
                <p class="mb-2">
                    <a class="text-body" href="tel:+902165148083">
                        <i class="fa fa-phone-alt text-primary me-3"></i>0216 514 80 83
                    </a>
                </p>
                <p class="mb-2">
                    <a class="text-body" href="mailto:info@guvenkagroup.com">
                        <i class="fa fa-envelope text-primary me-3"></i>info@guvenkagroup.com
                    </a>
                </p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-outline-body me-1" href="https://www.facebook.com/profile.php?id=100064028560042&sk=about" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-body me-1" href="https://x.com/GuvenkaGroup" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-body me-1" href="" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-outline-body me-0" href="https://www.instagram.com/guvenkagroup" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Col 2: Grup Şirketlerimiz -->
            <div class="col-lg-3 col-md-6">
                <h3 class="text-light mb-4">Grup Şirketlerimiz</h3>
                <a class="btn btn-link" href="">GKA İnşaat</a>
                <a class="btn btn-link" href="">GKA Hafriyat</a>
                <a class="btn btn-link" href="">GKA Yıkım</a>
                <a class="btn btn-link" href="">GKA Gayrimenkul</a>
                <a class="btn btn-link" href="">GKA Temizlik</a>
                <a class="btn btn-link" href="">GKA Danışmanlık</a>
                <a class="btn btn-link" href="">GKA Organizasyon</a>
            </div>

            <!-- Col 3: Hızlı Bağlantılar -->
            <div class="col-lg-3 col-md-6">
                <h3 class="text-light mb-4">Hızlı Bağlantılar</h3>
                <a class="btn btn-link" href="{{ route('home') }}">Ana Sayfa</a>
                <a class="btn btn-link" href="{{ route('about-us.index') }}">Kurumsal</a>
                <a class="btn btn-link" href="{{ route('contact.index') }}">İletişim</a>
                <a class="btn btn-link" href="{{ route('contact.index') }}">Teklif Al</a>
            </div>

            <!-- Col 4: Neden Güvenka -->
            <div class="col-lg-3 col-md-6">
                <h3 class="text-light mb-4">Neden Güvenka?</h3>
                <div class="d-flex align-items-start mb-3">
                    <i class="fa fa-star text-primary mt-1 me-3 flex-shrink-0"></i>
                    <p class="mb-0" style="color:#aaa;">Müşteri memnuniyeti temelli <strong class="text-light">"Güven ve Kalite"</strong> anlayışıyla hizmet.</p>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <i class="fa fa-bullseye text-primary mt-1 me-3 flex-shrink-0"></i>
                    <p class="mb-0" style="color:#aaa;">Her zaman çağın ötesinde, ihtiyaçlara <strong class="text-light">"güvenilir"</strong> çözüm.</p>
                </div>
                <div class="d-flex align-items-start">
                    <i class="fa fa-award text-primary mt-1 me-3 flex-shrink-0"></i>
                    <p class="mb-0" style="color:#aaa;">1990'dan bu yana <strong class="text-light">36 yıllık</strong> sektör deneyimi.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; {{ date('Y') }} <a href="{{ route('home') }}">Güvenka Group</a>, Tüm Hakları Saklıdır.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a class="text-body" href="{{ route('contact.index') }}">İletişim</a>
                    <span class="text-primary mx-2">|</span>
                    <a class="text-body" href="{{ route('about-us.index') }}">Kurumsal</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Başa Dön"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>

<!-- Sticky Side Buttons -->
<div class="sticky-side-buttons">

    <!-- Call Button -->
    <a href="tel:+905353008052" class="sticky-btn sticky-btn-call" aria-label="Bizi Arayın">
        <i class="fa fa-phone-alt"></i>
        <span class="sticky-btn-label">0535 300 80 52</span>
    </a>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/905353008052" target="_blank" rel="noopener noreferrer" class="sticky-btn sticky-btn-whatsapp" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="sticky-btn-label">WhatsApp</span>
    </a>

    <!-- Facebook -->
    <a href="https://www.facebook.com/profile.php?id=100064028560042&sk=about" target="_blank" rel="noopener noreferrer" class="sticky-btn sticky-btn-facebook" aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/guvenkagroup" target="_blank" rel="noopener noreferrer" class="sticky-btn sticky-btn-instagram" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
    </a>

    <!-- LinkedIn -->
    <a href="" target="_blank" rel="noopener noreferrer" class="sticky-btn sticky-btn-linkedin" aria-label="LinkedIn">
        <i class="fab fa-linkedin-in"></i>
    </a>

</div>
<!-- End Sticky Side Buttons -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>
</html>
