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
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/apakatabullshit/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
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
            <h1>kegiatan HIMATIF</h1>
            <h2>{{$tampil_halaman->nama_kegiatan}}</h2>
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
                            <h1 class="fw-bolder mb-1">{{$tampil_halaman->nama_kegiatan}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on {{$tampil_halaman->estimasi_jalan_kegiatan}} by Himatif</div>
                            <!-- Post categories-->
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('file_kegiatan/'. $tampil_halaman->file_kegiatan ) }}" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{!!$tampil_halaman->deskripsi_kegiatan !!}</p>
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
                                                                
                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="{{ asset('file_kegiatan/'. $k->file_kegiatan ) }}">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">{{$k->nama_kegiatan}}</h4>
                                                                                <p class="card-text">{!! Str::limit($k->deskripsi_kegiatan, 20) !!}</p>
                                                                                <a href="{{route('kegiatan.show', $k->id)}}" class="btn btn-primary">Read More</a>
                                                                            </div>
                                                                    </div>
                                                           
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <!-- <div class="carousel-item">
                                                            <div class="row">

                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Special title treatment</h4>
                                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Special title treatment</h4>
                                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Special title treatment</h4>
                                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <div class="row">

                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Special title treatment</h4>
                                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Special title treatment</h4>
                                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    <div class="card">
                                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title">Special title treatment</h4>
                                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
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
                        <div class="card-header">Gambar {{$tampil_halaman->nama_kegiatan}}</div>
                            <div class="card-body">
                                <div class="row">
                              
                                        <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
                                            <div class="row py-3 shadow-5">
                                                @foreach($gambar as $g )
                                                        <div class="col-4 mt-1">
                                                            <img
                                                                src="{{ asset('file_gambar/'. $g->file_gambar ) }}"
                                                                data-action="zoom"
                                                                alt="Gallery image 1"
                                                                class="active w-100"
                                                            />
                                                        </div>
                                                @endforeach
                                            </div>
                                        </div>
                                </div>
                            </div>    
                        </div>
                        <!-- Side widget-->
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
