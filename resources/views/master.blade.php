<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Regulated Agent - APLOG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/aplog.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="img/aplog.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        @auth
                            <a href="/" class="nav-item nav-link {{ $tittle === 'beranda' ? 'active' : '' }}">Beranda</a>
                            <a href="profil"
                                class="nav-item nav-link {{ $tittle === 'profil' ? 'active' : '' }}">Profil</a>
                            <a href="regulasi"
                                class="nav-item nav-link {{ $tittle === 'regulasi' ? 'active' : '' }}">Regulasi</a>
                            <a href="dg" class="nav-item nav-link {{ $tittle === 'dg' ? 'active' : '' }}">Dangerous
                                Goods</a>
                            <a href="form"
                                class="nav-item nav-link {{ $tittle === 'form' ? 'active' : '' }}">Attandance</a>
                            <a href="logout"
                                class="nav-item nav-link {{ $tittle === 'login' ? 'active' : '' }}">Logout</a>

                        @else
                            <a href="/" class="nav-item nav-link {{ $tittle === 'beranda' ? 'active' : '' }}">Beranda</a>
                            <a href="profil"
                                class="nav-item nav-link {{ $tittle === 'profil' ? 'active' : '' }}">Profil</a>
                            <a href="regulasi"
                                class="nav-item nav-link {{ $tittle === 'regulasi' ? 'active' : '' }}">Regulasi</a>
                            <a href="dg" class="nav-item nav-link {{ $tittle === 'dg' ? 'active' : '' }}">Dangerous
                                Goods</a>
                            <a href="login" class="nav-item nav-link {{ $tittle === 'login' ? 'active' : '' }}">Login</a>
                        @endauth
            </nav>
</head>

@yield('konten')

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-12">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Kontak</h4>
                <a class="btn btn-link" href="">Telepon: (0542) 766886</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Alamat</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Marsma. R Iswahyudi, Sepinggan
                    Kecamatan Balikpapan Selatan Provinsi Kalimantan Timur 76115 Indonesia</p>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">SIREKA</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://www.aplog.co/">Angkasa Pura
                                Logistics</a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>
