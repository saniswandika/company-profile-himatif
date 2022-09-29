<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Himpunan Mahasiswa Teknik Informatika </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/assets/img/himatif.png') }}" rel="icon">
  <link href="{{ asset('/assets/img/himatif.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link type="text/css" href="{{ asset('/assets/vendors/aos/aos.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('/assets/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  
  <link type="text/css" href="{{ asset('/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('/assets/vendors/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('/assets/vendors/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('/assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/zoom.css') }}" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Day - v4.8.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">dfhimatif@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0881022649160
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo text-light"><a href="index.html"><img src="{{ asset('assets/img/himatif.png') }}" alt=""></a>HIMATIF</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">BERANDA</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>PROGRAM KERJA HIMATIF</h1>
            <h2>{{$tampil_halaman->nama_program}}</h2>
        </div>
    </section>
  <!-- End Hero -->

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$tampil_halaman->nama_program}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on {{$tampil_halaman->estimasi_jalan_program}} by Himatif</div>
                            <!-- Post categories-->
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('file_program/'. $tampil_halaman->file_program ) }}" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{!!$tampil_halaman->deskripsi_program !!}</p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <section class="pt-5 pb-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <h3 class="mb-3">Kegiatan Himatif</h3>
                                            </div>
                                            <div class="col-6 text-right">
                                                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                                    <i class="fa fa-arrow-left"></i>
                                                </a>
                                                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                                    <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="row">
                                                            @foreach($kegiatan as $k)
                                                                
                                                                <div class="col-md-5 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="{{ asset('file_program/'. $k->file_program) }}">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">{{$k->nama_program}}</h4>
                                                                                <p class="card-text">{!! Str::words($k->deskripsi_program, 10, ' ...') !!}</p>
                                                                                <a href="{{route('program.show', $k->id)}}" class="btn btn-primary">Read More</a>
                                                                            </div>
                                                                    </div>
                                                           
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <!-- Side widget-->
                    <div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('/assets/vendors/aos/aos.js') }}"></script>
        <script src="{{ asset('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/assets/vendors/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('/assets/vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('/assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('/assets/vendors/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('/assets/js/main.js') }}"></script>
        <script src="{{ asset('/assets/js/zoom.js') }}"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
